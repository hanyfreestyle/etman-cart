<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\CategoryTableRequest;
use App\Models\admin\Category;
use App\Models\admin\CategoryTable;
use App\Models\admin\CategoryTableTranslation;
use App\Models\admin\config\DefPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryTableController extends AdminMainController
{
    public $controllerName ;

    function __construct($controllerName = 'category')
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$controllerName.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableList
    public  function TableList($id){

        $sendArr = ['TitlePage' => __('admin/def.table_info') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $Trashed = CategoryTable::onlyTrashed()->where('category_id','=',$id)->count();
        $CategoryTable = CategoryTable::where('category_id','=',$id)->orderBy('postion')->paginate(10);
        $Category = Category::findOrFail($id) ;

        return view('admin.product.category_table_index',compact('CategoryTable','pageData','Category','Trashed'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSoftDelete
    public function TableSoftDelete ($id)
    {
        $sendArr = ['TitlePage' => __('admin/def.table_info') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "deleteList";
        $Category = Category::findOrFail($id) ;
        $CategoryTable = CategoryTable::onlyTrashed()->where('category_id','=',$id)->paginate(10);
        return view('admin.product.category_table_index',compact('pageData','Category','CategoryTable'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableRestore
    public function TableRestore($id)
    {
        CategoryTable::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableForceDelete
    public function TableForceDelete($id)
    {
        $deleteRow =  CategoryTable::onlyTrashed()->where('id',$id)->firstOrFail();
        $deleteRow->forceDelete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableDestroy
    public function TableDestroy($id)
    {
        $deleteRow = CategoryTable::findOrFail($id);
        $deleteRow->delete();
        return redirect(route('category.Table_list',$deleteRow->category_id))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableCreate
    public function TableCreate($id)
    {
        $sendArr = ['TitlePage' => __('admin/def.table_info') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";

        $Category = Category::findOrFail($id) ;
        $CategoryTable = CategoryTable::findOrNew(0);

//        $CategoryTableData = CategoryTable::query()
////            ->with(['transName' => function($query){
////                $query->groupBy('name');
////            }])
//           ->with('transName')
//           //->groupBy('transName.name')
//           ->get()
//        ;


//        $CategoryTableData = CategoryTableTranslation::query()
//
//            ->groupBy('name')
//            ->all()
//        ;

//        $CategoryTableData = CategoryTableTranslation::groupBy('name')
//            ->select('name', DB::raw('count(*) as total'))
//            ->orderBy('total')
//            ->get();


//       // $CategoryTableData =  CategoryTable::with('transName')->get()->groupBy('transName.*.name');
//        $CategoryTableData =  CategoryTable::with('transName')
//            ->get()
//            ->groupBy('transName.*.name')
//            ->toArray()
//        ;
//
//
//        foreach ($CategoryTableData as $key => $value){
//            echobr($key);
//        }
//         //$CategoryTableData =  CategoryTable::with('transName');
//
//
//
//        dd($CategoryTableData);

        return view('admin.product.category_table_form',compact('CategoryTable','pageData','Category'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableEdit
    public function TableEdit($id)
    {
        $sendArr = ['TitlePage' => __('admin/def.table_info') ];
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
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = CategoryTableTranslation::where('category_table_id',$saveData->id)
                ->where('locale',$key)
                ->firstOrNew();
            $saveTranslation->category_table_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->save();
        }

        if($id == '0'){
            return redirect(route('category.Table_list',$request->input('category_id')))->with('Add.Done',"");
        }else{
            return redirect(route('category.Table_list',$request->input('category_id')))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSort
    public  function TableSort($id){

        $sendArr = ['TitlePage' => __('admin/def.table_info') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";


        $CategoryTable = CategoryTable::where('category_id','=',$id)
            ->orderBy('postion')
            ->paginate(10);
        $Category = Category::findOrFail($id) ;

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
        return response()->json(['success'=>$positions]);
    }
}
