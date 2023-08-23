<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\Developer;
use Illuminate\Support\Facades\View;
use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\CategoryRequest;
use App\Models\admin\Category;
use App\Models\admin\CategoryTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class CategoryController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;

    function __construct(
        $controllerName = 'category',
    )
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->PageTitle = __('admin/menu.category');

        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$controllerName.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = false;
        if( Route::currentRouteName()== 'category.index_Main'){
            $Categories = self::getSelectQuery(Category::defquery()->where('parent_id',null));
        }else{
            $Categories = self::getSelectQuery(Category::defquery());
        }
        return view('admin.product.category_index',compact('pageData','Categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SubCategory
    public function SubCategory($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle ,'restore'=> 0 ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = true;
        $Categories = self::getSelectQuery(Category::defquery()->where('parent_id',$id));
        $trees = Category::find($id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;
        return view('admin.product.category_index',compact('pageData','Categories','trees'));
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";
        $Categories = Category::tree()->with('translation')->get()->toTree();
        $Category = Category::findOrNew(0);
        return view('admin.product.category_form',compact('pageData','Category','Categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";
        $Categories = Category::tree()->get()->toTree();
        $Category = Category::findOrFail($id);
        return view('admin.product.category_form',compact('Category','pageData','Categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(CategoryRequest $request, $id=0)
    {

        $saveData =  Category::findOrNew($id);
        if($request->input('parent_id') != 0){
            $saveData->parent_id = $request->input('parent_id');
        }
        $saveData->setActive((bool) request('is_active', false));
        $saveData->save();

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('category/'.$saveData->id);
        $saveImgData->setnewFileName($request->input('en.slug'));
        $saveImgData->UploadOne($request);
        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = CategoryTranslation::where('category_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->category_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->slug = AdminHelper::Url_Slug($request->input($key.'.slug'));
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
            $saveTranslation->save();
        }


        if($saveData->is_active == false){
            $trees = Category::find($id)->descendants()->pluck('id')->toArray()  ;
            if(count($trees) > 0 ){
                Category::whereIn("id", $trees)
                    ->update([
                        'is_active' => 0,
                    ]);
            }
        }

        if($id == '0'){
            return redirect(route('category.index'))->with('Add.Done',"");
        }else{
            //return back();
            return redirect(route('category.index'))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = Category::findOrFail($id);
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->delete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
    public function emptyPhoto($id){
        $rowData = Category::findOrFail($id);
        $rowData = AdminHelper::DeleteAllPhotos($rowData,true);
        $rowData->save();
        return back();
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  updateStatus
    public function updateStatus(Request $request ){
        $thisId  = $request->send_id;
        $updateData = Category::findOrFail($thisId);
        if($updateData->is_active == '1'){
            $updateData->is_active = '0';
        }else{
            $updateData->is_active = '1';
        }
        $updateData->save();
        return response()->json(['success'=>$thisId]);
    }

}



