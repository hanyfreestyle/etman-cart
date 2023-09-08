<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\ProductTableRequest;
use App\Models\admin\AttributeTable;
use App\Models\admin\Product;
use App\Models\admin\ProductTable;
use App\Models\admin\ProductTableTranslation;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ProductTableController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;

    function __construct(
        $selMenu = 'webPro.',
        $controllerName = 'Product',
        $PrefixRole = 'product',
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
            Cache::forget('MenuCategory_Cash_'.$key);
        }
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableList
    public  function TableList($id){

        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> $this->selMenu ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";


        $Product = Product::findOrFail($id) ;
        $ProductTable = ProductTable::where('product_id','=',$id)
            ->with('attributeName')
            ->orderBy('postion')
            ->paginate(15);

        $ProductTableAdd = ProductTable::where('product_id',$Product->id)
            ->pluck('attribute_id')
            ->toArray();
        $AttributeList = AttributeTable::where('is_active',1)->whereNotIn('id',$ProductTableAdd)->get();

        return view('admin.product.product_table_index',compact('ProductTable','pageData','Product','AttributeList'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableDestroy
    public function TableDestroy($id)
    {
        $deleteRow = ProductTable::findOrFail($id);
        $deleteRow->forceDelete();
        self::ClearCash();
        return redirect(route($this->PrefixRoute.'.Table_list',$deleteRow->product_id))->with('confirmDelete',"");
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableEdit
    public function TableEdit($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle,'selMenu'=> $this->selMenu  ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";

        $ProductTable = ProductTable::findOrFail($id);
        $Product = Product::findOrFail($ProductTable->product_id) ;

        return view('admin.product.product_table_form',compact('ProductTable','pageData','Product'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableStoreUpdate
    public function TableStoreUpdate(ProductTableRequest $request, $id=0)
    {

        $saveData =  ProductTable::findOrNew($id);
        $saveData->product_id = $request->input('product_id');
        $saveData->attribute_id = $request->input('attribute_id');
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = ProductTableTranslation::where('product_table_id',$saveData->id)
                ->where('locale',$key)
                ->firstOrNew();
            $saveTranslation->product_table_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->save();
        }

        self::ClearCash();
        if($id == '0'){
            return redirect(route($this->PrefixRoute.'.Table_list',$request->input('product_id')))->with('Add.Done',"");
        }else{
            return redirect(route($this->PrefixRoute.'.Table_list',$request->input('product_id')))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSort
    public  function TableSort($id){

        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> $this->selMenu  ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $ProductTable = ProductTable::where('product_id','=',$id)
            ->with('attributeName')
            ->orderBy('postion')
            ->paginate(10);
        $Product = Product::findOrFail($id) ;

        return view('admin.product.product_table_sort',compact('ProductTable','pageData','Product'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSortSave
    public function TableSortSave(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  ProductTable::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }




}
