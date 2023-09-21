<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\CategoryTableRequest;
use App\Models\admin\AttributeTable;
use App\Models\admin\Category;
use App\Models\admin\CategoryTable;
use App\Models\admin\CategoryTableTranslation;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CategoryTableController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;

    function __construct(
        $selMenu = 'webPro.',
        $controllerName = 'category',
        $PrefixRole = 'category',
        $PrefixRoute = '#',
    )
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;

        $this->PageTitle = __('admin/def.table_info');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$PrefixRole.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->selMenu.$this->controllerName);
        View::share('PrefixRole', $PrefixRole);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # ClearCash
    public function ClearCash(){
        foreach ( config('app.lang_file') as $key=>$lang){
            Cache::forget('ShopMenuCategory_Cash_'.$key);
            Cache::forget('WebsiteMenuCategory_Cash_'.$key);
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableList
    public  function TableList($id){

        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> $this->selMenu ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";


        $Category = Category::findOrFail($id) ;
        $CategoryTable = CategoryTable::where('category_id','=',$id)
            ->with('attributeName')
            ->orderBy('postion')
            ->paginate(15);

        $CategoryTableAdd = CategoryTable::where('category_id',$Category->id)
            ->pluck('attribute_id')
            ->toArray();
        $AttributeList = AttributeTable::where('is_active',1)->whereNotIn('id',$CategoryTableAdd)->get();

        return view('admin.product.category_table_index',compact('CategoryTable','pageData','Category','AttributeList'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableDestroy
    public function TableDestroy($id)
    {
        $deleteRow = CategoryTable::findOrFail($id);
        $deleteRow->forceDelete();
        self::ClearCash();
        return redirect(route($this->PrefixRoute.'.Table_list',$deleteRow->category_id))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableEdit
    public function TableEdit($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle,'selMenu'=> $this->selMenu  ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";

        $CategoryTable = CategoryTable::findOrFail($id);
        $Category = Category::findOrFail($CategoryTable->category_id) ;

        return view('admin.product.category_table_form',compact('CategoryTable','pageData','Category'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableStoreUpdate
    public function TableStoreUpdate(CategoryTableRequest $request, $id=0)
    {

        $saveData =  CategoryTable::findOrNew($id);
        $saveData->category_id = $request->input('category_id');
        $saveData->attribute_id = $request->input('attribute_id');
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = CategoryTableTranslation::where('category_table_id',$saveData->id)
                ->where('locale',$key)
                ->firstOrNew();
            $saveTranslation->category_table_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->save();
        }
        self::ClearCash();
        if($id == '0'){
            return redirect(route($this->PrefixRoute.'.Table_list',$request->input('category_id')))->with('Add.Done',"");
        }else{
            return redirect(route($this->PrefixRoute.'.Table_list',$request->input('category_id')))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSort
    public  function TableSort($id){

        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> $this->selMenu  ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $CategoryTable = CategoryTable::where('category_id','=',$id)
            ->with('attributeName')
            ->orderBy('postion')
            ->paginate(10);
        $Category = Category::findOrFail($id) ;
        self::ClearCash();
        return view('admin.product.category_table_sort',compact('CategoryTable','pageData','Category'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSortSave
    public function TableSortSave(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  CategoryTable::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }

}
