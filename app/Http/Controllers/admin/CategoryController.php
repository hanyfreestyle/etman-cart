<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\CategoryRequest;
use App\Models\admin\Category;
use App\Models\admin\CategoryTranslation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use function Ramsey\Collection\add;
use DB ;


class CategoryController extends AdminMainController
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
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $sendArr = ['TitlePage' => __('admin/menu.category'),'restore'=> 1 ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['Trashed'] = Category::onlyTrashed()->count();
        $pageData['SubView'] = false;

        $Categories = Category::query()
            ->with('translation')
            ->withCount('children')
            ->orderBy('id','asc')
            ->paginate(10);
        return view('admin.product.category_index',compact('pageData','Categories'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function SubCategory($id) :View
    {
        $sendArr = ['TitlePage' => __('admin/menu.category'),'restore'=> 0 ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = true;

        $Categories = Category::query()
            ->with('translation')
            ->withCount('children')
            ->where('parent_id',$id)
            ->paginate(10);

            $trees = Category::find($id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;
         return view('admin.product.category_index',compact('pageData','Categories','trees'));
    }






#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $sendArr = ['TitlePage' => __('admin/menu.category') ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "deleteList";
        //$Categories  = Category::onlyTrashed()->orderBy('id','desc')->paginate(20);
        $Categories = self::getSelectQuery(Category::onlyTrashed());

        return view('admin.post.category_index',compact('pageData','Categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $sendArr = ['TitlePage' => __('admin/menu.category') ];
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
        $sendArr = ['TitlePage' => __('admin/menu.category') ];
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

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('category');
        $saveImgData->setnewFileName($request->input('en.slug'));
        $saveImgData->UploadOne($request);

        $saveData =  Category::findOrNew($id);
       // $saveData->slug = AdminHelper::Url_Slug($request->slug);
        if($request->input('parent_id') != 0){
            $saveData->parent_id = $request->input('parent_id');
        }
        $saveData->setActive((bool) request('is_active', false));
        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = CategoryTranslation::where('category_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->category_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->slug = $request->input($key.'.slug');
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
//            $saveTranslation->body_h1 = $request->input($key.'.body_h1');
//            $saveTranslation->breadcrumb = $request->input($key.'.breadcrumb');
            $saveTranslation->save();
        }

        if($id == '0'){
            return redirect(route('category.index'))->with('Add.Done',"");
        }else{
            return back();
            ////return redirect(route('category.index'))->with('Edit.Done',"");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = Category::findOrFail($id);
        $deleteRow->delete();
        return redirect(route('category.index'))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function Restore($id)
    {
        Category::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        $deleteRow =  Category::onlyTrashed()->where('id',$id)->first();
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->forceDelete();
        return back()->with('confirmDelete',"");
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

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
    public function emptyPhoto($id){
        $rowData = Category::findOrFail($id);
        $rowData = AdminHelper::DeleteAllPhotos($rowData,true);
        $rowData->save();
        return back();
    }





#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  print_count_name
    static function print_count_name($lang,$row,$url)
    {

        if($row->children_count > 0){
             return '<a href="'.route($url,$row->id).'">'.optional($row->translate($lang))->name.' ('.$row->children_count
            .')</a>' ;
        }else{
            return $row->translate($lang)->name ?? '';
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


    public function getdata()
    {
        $old_Category = DB::connection('mysql2')->table('product_cat')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'category_id'=>$oneCategory->id ,
                'locale'=>'ar' ,
                'slug'=>$oneCategory->name_m ,
                'name'=>$oneCategory->name ,
                'des'=>$oneCategory->des ,
                'g_title'=>$oneCategory->g_name ,
                'g_des'=>$oneCategory->g_des ,
            ];

            CategoryTranslation::unguard();
            CategoryTranslation::create($data);

            $data = [
                'category_id'=>$oneCategory->id ,
                'locale'=>'en' ,
                'slug'=>$oneCategory->name_m_en ,
                'name'=>$oneCategory->name_en ,
                'des'=>$oneCategory->des_en ,
                'g_title'=>$oneCategory->g_name_en ,
                'g_des'=>$oneCategory->g_des_en ,
            ];
            CategoryTranslation::unguard();
            CategoryTranslation::create($data);

        }
    }


    public function wbepimg()
    {
        $Categories = Category::query()
            ->with('translation')
            ->withCount('children')
            ->orderBy('id','asc')
            ->where('webp',0)
            ->limit(1)
            ->get()
        ;

        foreach ($Categories as $Category){
            $file = public_path($Category->photo);
            $saveImage =  Image::make($file);
            $saveDir = 'images/category/'.$Category->id ;
            $uploadPath  = public_path($saveDir);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->slug) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo = $SaveDb ;
            $Category->save() ;


            $file = public_path($Category->photo_thum_1);
            $saveImage =  Image::make($file);
            $uploadPath  = public_path('images/category/'.$Category->id);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->slug) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo_thum_1 = $SaveDb ;
            $Category->webp = 1 ;
            $Category->save() ;

        }
    }





}



