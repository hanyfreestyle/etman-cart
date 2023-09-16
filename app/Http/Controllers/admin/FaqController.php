<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\FaqRequest;
use App\Models\admin\Faq;
use App\Models\admin\FaqCategory;
use App\Models\admin\FaqTranslation;
use Cache;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FaqController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(

        $selMenu = 'FAQ.',
        $controllerName = 'FaqList',
        $PrefixRole = 'Faq',
        $PrefixRoute = '#',
        $PrefixCatRoute = 'FAQ.FaqCat',
        $pageData = array(),

    )
    {
        parent::__construct();

        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;
        $this->PageTitle = __('admin/menu.faq');

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
            'restore'=> 0 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # ClearCash
    public function ClearCash(){
        foreach ( config('app.lang_file') as $key=>$lang){
            Cache::forget('Faq_Cash_'.$key);
        }
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['ConfigUrl'] = route('FAQ.Config');

        $Faqs = Faq::with('FaqToCategories')
            ->paginate(10);

        return view('admin.faq.faq_index',compact('pageData','Faqs'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ListCategory
    public function ListCategory($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";

        $Faqs = Faq::whereHas('FaqToCategories', function ($query) use ($id) {
            $query->where('category_id', $id);
        })->paginate(10);

        return view('admin.faq.faq_index',compact('pageData','Faqs'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Add";
        $Faq =  Faq::findOrNew(0);
        $FaqCategory = FaqCategory::all();
        $selCat = [];
        return view('admin.faq.faq_form',compact('pageData','Faq','FaqCategory','selCat'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";

        $FaqCategory = FaqCategory::all();
        $Faq =  Faq::where('id',$id)->with('FaqToCategories')->firstOrFail();
        $selCat = $Faq->FaqToCategories()->pluck('category_id')->toArray();
        return view('admin.faq.faq_form',compact('pageData','Faq','FaqCategory','selCat'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(FaqRequest $request, $id=0)
    {
        $categories = $request->input('categories');

        $saveData =  Faq::findOrNew($id);
        $saveData->is_active = intval((bool) $request->input( 'is_active'));
        $saveData->url_type = intval((bool) $request->input( 'url_type'));
        $saveData->save();
        $saveData->FaqToCategories()->sync($categories);


        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = FaqTranslation::where('faq_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->faq_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->other = $request->input($key.'.other');
            $saveTranslation->url  = $request->input($key.'.url');
            $saveTranslation->url_but  = $request->input($key.'.url_but');
            $saveTranslation->save();
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
        $deleteRow = Faq::findOrFail($id);
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->forceDelete();
        self::ClearCash();
        return back()->with('confirmDelete',"");
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Sort
    public  function Sort($Categoryid){

        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";

        $Category = FaqCategory::with(['faqs' => function ($query) {
            $query->orderBy('postion','ASC');
        }])->where('id',$Categoryid)->firstOrFail();

//        $Category = FaqCategory::findOrFail($Categoryid);
//        $pageData = $this->pageData;
//        $pageData['ViewType'] = "List";
//
//        $Banners = Faq::with('translation')
//            ->where('category_id',$Category->id)
//            ->orderBy('postion','asc')
//            ->get();
        return view('admin.faq.sort',compact('Category','pageData'));
    }

//#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//#|||||||||||||||||||||||||||||||||||||| #     SaveSort
//    public function SaveSort(Request $request){
//        $positions = $request->positions;
//        foreach($positions as $position) {
//            $id = $position[0];
//            $newPosition = $position[1];
//            $saveData =  Faq::findOrFail($id) ;
//            $saveData->postion = $newPosition;
//            $saveData->save();
//        }
//        self::ClearCash();
//        return response()->json(['success'=>$positions]);
//    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        $categoryid = $request->categoryid;

        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];

            DB::table('faqcategory_faq')
                ->where('category_id',$categoryid)
                ->where('faq_id',$id)
                ->update(['postion' => $newPosition]);


        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }


}
