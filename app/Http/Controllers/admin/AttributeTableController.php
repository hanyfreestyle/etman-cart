<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\AttributeTableRequest;
use App\Models\admin\AttributeTable;
use App\Models\admin\AttributeTableTranslation;
use App\Models\admin\Category;
use App\Models\admin\CategoryTable;
use Illuminate\Support\Facades\View;

class AttributeTableController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;

    function __construct($controllerName = 'category')
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->PageTitle = __('admin/menu.Attribute_Table');
        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$controllerName.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        \Illuminate\Support\Facades\View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $sendArr = ['TitlePage' =>  $this->PageTitle ,'restore'=> 0];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['AddPageUrl'] = route('AttributeTables.create');
        $pageData['RestoreUrl'] = route('AttributeTables.SoftDelete');
        $pageData['RestoreRole'] = 'category_restore';

        $pageData['Trashed'] = AttributeTable::onlyTrashed()->count();
        $Attributes = self::getSelectQuery(AttributeTable::query()->withCount('get_category_table'));
        return view('admin.attribute_tables.index',compact('pageData','Attributes'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $sendArr = ['TitlePage' =>  $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "deleteList";
        $Attributes = self::getSelectQuery(AttributeTable::onlyTrashed());
        return view('admin.attribute_tables.index',compact('pageData','Attributes'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $sendArr = ['TitlePage' =>  $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";
        $pageData['ListPageUrl'] =  route('AttributeTables.index');
        $Attribute = AttributeTable::findOrNew(0);
        return view('admin.attribute_tables.form',compact('pageData','Attribute'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
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

        if($id == '0'){
            return redirect(route('AttributeTables.index'))->with('Add.Done',"");
        }else{
            // return back();
            return redirect(route('AttributeTables.index'))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = AttributeTable::findOrFail($id);
        $deleteRow->delete();
        return redirect(route('AttributeTables.index'))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function restored($id)
    {
        $subList = AttributeTable::where('id',$id)->with('get_category_table')->withTrashed()->firstOrFail();
        foreach ($subList->get_category_table as $list ){
            CategoryTable::onlyTrashed()->where('id',$list->id)->restore();
        }
        AttributeTable::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        $deleteRow =  AttributeTable::onlyTrashed()->where('id',$id)->firstOrFail();
        $deleteRow->forceDelete();
        return back()->with('confirmDelete',"");
    }

}
