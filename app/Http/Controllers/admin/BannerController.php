<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\BannerRequest;
use App\Http\Requests\admin\OurClientRequest;
use App\Models\admin\Banner;
use App\Models\admin\BannerCategory;
use App\Models\admin\BannerTranslation;
use App\Models\admin\BlogPost;
use App\Models\admin\BlogPostTranslation;
use App\Models\admin\Category;
use App\Models\admin\OurClient;
use App\Models\admin\OurClientTranslation;
use App\Models\admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;
use DB ;

class BannerController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(

        $selMenu = 'Banners.',
        $controllerName = 'Banner',
        $PrefixRole = 'Banner',
        $PrefixRoute = '#',
        $pageData = array(),

    )
    {
        parent::__construct();

        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;
        $this->PageTitle = __('admin/menu.web_banner');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit','config']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$PrefixRole.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

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
            'restore'=> 1 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['ConfigUrl'] = route('Banners.Config');
        $Banners = self::getSelectQuery(Banner::defquery()->orderBy('category_id'));
        return view('admin.banner.banner_index',compact('pageData','Banners'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ListCategory
    public function ListCategory($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $Category = BannerCategory::findOrFail($id);
        $Banners = self::getSelectQuery(Banner::defquery()->where('category_id',$Category->id));
        return view('admin.banner.banner_index',compact('pageData','Banners'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Add";
        $Banner = Banner::findOrNew(0);
        return view('admin.banner.banner_form',compact('pageData','Banner'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $Banner = Banner::findOrFail($id);
        return view('admin.banner.banner_form',compact('pageData','Banner'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(BannerRequest $request, $id=0)
    {

        dd('hio');
        $saveData =  OurClient::findOrNew($id);
        $saveData->setActive((bool) request('is_active', false));
        $saveData->save();

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('client/'.$saveData->id);
        $saveImgData->setnewFileName($request->input('en.name'));
        $saveImgData->UploadOne($request);
        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = OurClientTranslation::where('client_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->client_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->slug = AdminHelper::Url_Slug($request->input($key.'.slug'));
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
            $saveTranslation->save();
        }

        if($id == '0'){
            return redirect(route($this->PrefixRoute.'.index'))->with('Add.Done',"");
        }else{
            return redirect(route($this->PrefixRoute.'.index'))->with('Edit.Done',"");
        }
    }

//#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//#|||||||||||||||||||||||||||||||||||||| #     destroy
//    public function destroy($id)
//    {
//        $deleteRow = OurClient::findOrFail($id);
//        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
//        $deleteRow->delete();
//        return back()->with('confirmDelete',"");
//    }
//
//
//#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
//    public function emptyPhoto($id){
//        $rowData = OurClient::findOrFail($id);
//        $rowData = AdminHelper::DeleteAllPhotos($rowData,true);
//        $rowData->save();
//        return back();
//    }
//
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Sort
    public  function Sort($Categoryid){
        $Category = BannerCategory::findOrFail($Categoryid);
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";

        $Banners = Banner::with('translation')
            ->where('category_id',$Category->id)
            ->orderBy('postion','asc')
            ->get();
        return view('admin.banner.sort',compact('Banners','Category','pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  Banner::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        return response()->json(['success'=>$positions]);
    }
//
//
//#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//#|||||||||||||||||||||||||||||||||||||| #     config
//    public function config()
//    {
//        $pageData = $this->pageData;
//        $pageData['TitlePage'] = __('admin/def.model_config');
//        $pageData['ViewType'] = "List";
//        return view('admin.our_client.config',compact('pageData'));
//    }

}
