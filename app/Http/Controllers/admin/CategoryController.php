<?php

namespace App\Http\Controllers\admin;
use Cache;
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
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(
        $selMenu = 'webPro.',
        $controllerName = 'category',
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


        $this->PageTitle = __('admin/menu.web_category');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);


        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);
        View::share('controllerName', $controllerName);

        $sendArr = [
            'TitlePage' =>  $this->PageTitle ,
            'selMenu'=> $this->selMenu,
            'prefix_Role'=> $this->PrefixRole ,
            'restore'=> 0 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

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
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = false;
        if( Route::currentRouteName()== 'webPro.category.index_Main'){
            $Categories = self::getSelectQuery(Category::Admin_Def_Web_Query()
                ->where('parent_id',null)
                ->where('cat_web',true)
                ->where('cat_web_data',true)
            );
        }else{
            $Categories = self::getSelectQuery(Category::Admin_Def_Web_Query()
                ->where('cat_web',true)
                ->where('cat_web_data',true));
        }
         return view('admin.product.category_index',compact('pageData','Categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function AddCatToWeb()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = false;
        $Categories = self::getSelectQuery(Category::Admin_Def_Web_Query()->where('cat_web',false)->orWhere('cat_web_data', false));
        return view('admin.product.category_index',compact('pageData','Categories'));
    }





#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SubCategory
    public function SubCategory($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = true;
        $Categories = self::getSelectQuery(Category::defSitequery()->where('parent_id',$id)->where('cat_web',true)->where('cat_web_data',true));
        $trees = Category::find($id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;
        return view('admin.product.category_index',compact('pageData','Categories','trees'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Add";
        $Categories = Category::tree()->with('translation')->get()->toTree();
        $Category = Category::findOrNew(0);
        return view('admin.product.category_form',compact('pageData','Category','Categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData;
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
        if($request->input('parent_id') != 0 and $request->input('parent_id') != $saveData->id){
            $saveData->parent_id = $request->input('parent_id');
        }
        $saveData->setActive((bool) request('is_active', false));
        $saveData->cat_shop = $request->input('cat_shop');
        $saveData->cat_web = $request->input('cat_web');
        $saveData->cat_web_data =1;
        $saveData->save();

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('category/'.$saveData->id);
        //$saveImgData->setfileUploadName('photo');
        $saveImgData->setnewFileName($request->input('en.slug'));
        $saveImgData->UploadOne($request);
        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);
        $saveData->save();

        $saveImgData_icon = new PuzzleUploadProcess();
        $saveImgData_icon->setUploadDirIs('category/'.$saveData->id);
        $saveImgData_icon->setnewFileName($request->input('en.slug'));
        $saveImgData_icon->setfileUploadName('icon');
        $saveImgData_icon->UploadOneNofilter($request,'4',60,60);
        $saveData = AdminHelper::saveAndDeletePhotoByOne($saveData,$saveImgData_icon,'icon');
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
        $deleteRow = Category::findOrFail($id);
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->delete();
        self::ClearCash();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
    public function emptyPhoto($id){
        $rowData = Category::findOrFail($id);
        $rowData = AdminHelper::DeleteAllPhotos($rowData,true);
        $rowData->save();
        self::ClearCash();
        return back();
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
    public function emptyIcon ($id){
        $rowData = Category::findOrFail($id);
        $rowData = AdminHelper::DeleteAllPhotos($rowData,true,['icon']);
        $rowData->save();
        self::ClearCash();
        return back();
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     config
    public function config()
    {
        $pageData = $this->pageData;
        $pageData['TitlePage'] = "اعدادات القسم";
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = false;

        return view('admin.product.config',compact('pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CategorySort
    public function CategorySort($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> $this->selMenu  ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $Category = [];
        if($id == 0){
            $Categories = self::getSelectQuery(Category::Admin_Def_Web_Query()->where('parent_id', null)
                ->where('cat_web', true)
                ->where('cat_web_data', true)
                ->orderBy('postion_web'));
        }else{
            $Category =  Category::findOrNew($id);
            $Categories = self::getSelectQuery(Category::Admin_Def_Shop_query()->where('parent_id', $Category->id)
                ->where('cat_web', true)
                ->where('cat_web_data', true)
                ->orderBy('postion_web'));
        }
        return view('admin.product.category_sort',compact('pageData','Categories','Category'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     TableSortSave
    public function CategorySaveSort(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  Category::findOrFail($id) ;
            $saveData->postion_web = $newPosition;
            $saveData->save();
        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }


}



