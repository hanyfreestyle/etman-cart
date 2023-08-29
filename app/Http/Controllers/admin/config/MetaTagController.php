<?php
namespace App\Http\Controllers\admin\config;

use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Models\admin\BannerCategory;
use App\Models\admin\config\MetaTag;
use App\Http\Requests\admin\config\MetaTagRequest;
use App\Models\admin\config\MetaTagTranslation;
use Cache ;
use Illuminate\Support\Facades\View;


class MetaTagController extends AdminMainController
{

    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(
        $selMenu = 'config.',
        $controllerName = 'meta',
        $PrefixRole = 'meta',
        $PrefixRoute = '#',
        $PrefixCatRoute = '',
        $pageData = array(),
    )
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;
        $this->PageTitle = __('admin/menu.setting_meta_tags');


        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit','config']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$PrefixRole.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);


        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        $viewEditor = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_editor',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('viewEditor', $viewEditor);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);
        View::share('controllerName', $controllerName);
        View::share('PrefixCatRoute', $PrefixCatRoute);

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
        $pageData['Trashed'] = MetaTag::onlyTrashed()->count();

        $pageData['ConfigUrl'] = route('config.meta.config');
        $rowData = self::getSelectQuery(MetaTag::defquery());
        return view('admin.config.meta_index',compact('pageData','rowData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "deleteList";
        $rowData = self::getSelectQuery(MetaTag::onlyTrashed());
        return view('admin.config.meta_index',compact('pageData','rowData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Add";
        $MetaTag = new MetaTag();
        $BannerCategory = BannerCategory::all();
        return view('admin.config.meta_form',compact('pageData','MetaTag','BannerCategory'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $MetaTag = MetaTag::findOrFail($id);
        $BannerCategory = BannerCategory::all();
        return view('admin.config.meta_form',compact('pageData','MetaTag','BannerCategory'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(MetaTagRequest $request, $id='0')
    {


        $saveData =  MetaTag::findOrNew($id) ;
        $saveData->cat_id = $request->input('cat_id');
        $saveData->banner_id = $request->input('banner_id');
        $saveData->save();

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('meta/'.$saveData->id);
        $saveImgData->setnewFileName($request->input('cat_id'));
        $saveImgData->UploadOne($request);
        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = MetaTagTranslation::where('meta_tag_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->meta_tag_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->slug = AdminHelper::Url_Slug($request->input($key.'.slug'));
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
            $saveTranslation->body_h1 = $request->input($key.'.body_h1');
            $saveTranslation->breadcrumb = $request->input($key.'.breadcrumb');
            $saveTranslation->save();
        }

        Cache::forget('WebMeta_Cash');
        if($id == '0'){
            return redirect(route('config.meta.index'))->with('Add.Done',"");
        }else{
            return redirect(route('config.meta.index'))->with('Edit.Done',"");
        }

    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     delete
    public function delete($id)
    {
        MetaTag::findOrFail($id)->delete();
        Cache::forget('WebMeta_Cash');
        return redirect(route('config.meta.index'))->with('confirmDelete','');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
    public function emptyPhoto($id){
        $rowData = MetaTag::findOrFail($id);
        $rowData = AdminHelper::DeleteAllPhotos($rowData,true);
        $rowData->save();
        return back();
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function restored($id)
    {
        MetaTag::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        $deleteRow =  MetaTag::onlyTrashed()->where('id',$id)->firstOrFail();
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->forceDelete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     config
    public function config()
    {
        $pageData = $this->pageData;
        $pageData['TitlePage'] = __('admin/def.model_config');
        $pageData['ViewType'] = "List";
        return view('admin.config.meta_config',compact('pageData'));
    }

}
