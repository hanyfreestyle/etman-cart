<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\AttributeTableRequest;
use App\Models\admin\AttributeTable;
use App\Models\admin\AttributeTableTranslation;
use App\Models\admin\CategoryTable;
use App\Models\admin\ProductTable;
use Cache;
use Illuminate\Support\Facades\View;

class AttributeTableController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(
        $selMenu = 'webPro.',
        $controllerName = 'AttributeTables',
        $PrefixRole = 'category',
        $PrefixRoute = '#',
        $pageData = array(),
    )
    {
        parent::__construct();

        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;

        $this->PageTitle = __('admin/menu.web_attribute_Table');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$PrefixRole.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);


        $sendArr = [
            'TitlePage' =>  $this->PageTitle ,
            'selMenu'=> $this->selMenu,
            'prefix_Role'=> $this->PrefixRole ,
            'restore'=> 1 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # ClearCash
    public function ClearCash(){
        foreach ( config('app.lang_file') as $key=>$lang){
            Cache::forget('MenuCategory_Cash_'.$key);
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "List";
        $pageData['ConfigUrl'] = '#';

        $pageData['Trashed'] = AttributeTable::onlyTrashed()->count();
        $Attributes = self::getSelectQuery(AttributeTable::query()
            ->withCount('get_category_table')
            ->withCount('get_product_table')
        );
        return view('admin.attribute_tables.index',compact('pageData','Attributes'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "deleteList";
        $Attributes = self::getSelectQuery(AttributeTable::onlyTrashed());
        return view('admin.attribute_tables.index',compact('pageData','Attributes'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "Add";
        $pageData['ListPageUrl'] =  route($this->PrefixRoute.'.index');
        $Attribute = AttributeTable::findOrNew(0);
        return view('admin.attribute_tables.form',compact('pageData','Attribute'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "Edit";
        $Attribute = AttributeTable::findOrFail($id);
        return view('admin.attribute_tables.form',compact('pageData','Attribute'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(AttributeTableRequest $request, $id=0)
    {

        $saveData =  AttributeTable::findOrNew($id);
        $saveData->setActive((bool) request('is_active', false));
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = AttributeTableTranslation::where('attribute_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->attribute_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->save();
        }

        $subList = CategoryTable::where('attribute_id',$id)->pluck('id')->toArray();
        if(count($subList) > 0){
            CategoryTable::whereIn("id", $subList)
                ->update(['is_active' => (int)$saveData->is_active]);
        }
        self::ClearCash();
        if($id == '0'){
            return redirect(route($this->PrefixRoute.'.index'))->with('Add.Done',"");
        }else{
            return redirect(route($this->PrefixRoute.'.index'))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = AttributeTable::findOrFail($id);
        $deleteRow->delete();
        self::ClearCash();
        return redirect(route($this->PrefixRoute.'.index'))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function restored($id)
    {
        $subList = AttributeTable::where('id',$id)
            ->with('get_category_table')
            ->with('get_product_table')
            ->withTrashed()->firstOrFail();

        if(count($subList->get_category_table) > 0){
            foreach ($subList->get_category_table as $list ){
                CategoryTable::onlyTrashed()->where('id',$list->id)->restore();
            }
        }

        if(count($subList->get_product_table) > 0){
            foreach ($subList->get_product_table as $list ){
                ProductTable::onlyTrashed()->where('id',$list->id)->restore();
            }
        }

        AttributeTable::onlyTrashed()->where('id',$id)->restore();
        self::ClearCash();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        $deleteRow =  AttributeTable::onlyTrashed()->where('id',$id)->firstOrFail();
        $deleteRow->forceDelete();
        self::ClearCash();
        return back()->with('confirmDelete',"");
    }

}
