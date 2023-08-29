<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;

use App\Models\admin\Banner;
use App\Models\admin\BannerTranslation;
use App\Models\admin\BlogPost;
use App\Models\admin\BlogPostTranslation;
use App\Models\admin\Category;
use App\Models\admin\CategoryTable;
use App\Models\admin\CategoryTableTranslation;
use App\Models\admin\CategoryTranslation;
use App\Models\admin\config\MetaTag;
use App\Models\admin\config\MetaTagTranslation;
use App\Models\admin\config\WebPrivacy;
use App\Models\admin\config\WebPrivacyTranslation;
use App\Models\admin\OurClient;
use App\Models\admin\OurClientTranslation;
use App\Models\admin\Product;
use App\Models\admin\ProductPhoto;
use App\Models\admin\ProductTranslation;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class GetOldDataController extends AdminMainController
{

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getdata
    public function getdata()
    {
        $old_Category = DB::connection('mysql2')->table('product_cat')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'category_id' => $oneCategory->id,
                'locale' => 'ar',
                'slug' => $oneCategory->name_m,
                'name' => $oneCategory->name,
                'des' => $oneCategory->des,
                'g_title' => $oneCategory->g_name,
                'g_des' => $oneCategory->g_des,
            ];

            CategoryTranslation::unguard();
            CategoryTranslation::create($data);

            $data = [
                'category_id' => $oneCategory->id,
                'locale' => 'en',
                'slug' => $oneCategory->name_m_en,
                'name' => $oneCategory->name_en,
                'des' => $oneCategory->des_en,
                'g_title' => $oneCategory->g_name_en,
                'g_des' => $oneCategory->g_des_en,
            ];
            CategoryTranslation::unguard();
            CategoryTranslation::create($data);

        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     wbepimg
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
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     get_CategoryTableTranslation
    public function get_CategoryTableTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('product_cat_data')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'category_table_id'=>$oneCategory->id ,
                'locale'=>'ar' ,
                'name'=>$oneCategory->name ,
                'des'=>$oneCategory->des ,
            ];

            CategoryTableTranslation::unguard();
            CategoryTableTranslation::create($data);

            $data = [
                'category_table_id'=>$oneCategory->id ,
                'locale'=>'en' ,
                'name'=>$oneCategory->name_en ,
                'des'=>$oneCategory->des_en ,

            ];
            CategoryTableTranslation::unguard();
            CategoryTableTranslation::create($data);

        }
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     get_CategoryTable
    public function get_CategoryTable()
    {
        $old_Category = DB::connection('mysql2')->table('product_cat_data')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'id'=>$oneCategory->id ,
                'category_id'=>$oneCategory->cat_id ,
            ];

            CategoryTable::unguard();
            CategoryTable::create($data);
        }
    }



//@foreach($Categories as $CategoryList)
//<x-category-item :Category="$CategoryList" />
//@endforeach

    public function get_old_Product()
    {
        $old_Product = DB::connection('mysql2')->table('product')->get();
        foreach ($old_Product as $oneProduct)
        {
            $data = [
                'id' => $oneProduct->id,
                'category_id' => $oneProduct->cat_id,
                'photo' => $oneProduct->photo,
                'photo_thum_1' => $oneProduct->photo_t,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            Product::unguard();
            Product::create($data);
        }
    }
    public function get_old_ProductTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('product')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'product_id' => $oneCategory->id,
                'locale' => 'ar',
                'slug' => $oneCategory->name_m,
                'name' => $oneCategory->name,
                'des' => $oneCategory->des,
                'g_title' => $oneCategory->g_name,
                'g_des' => $oneCategory->g_des,
            ];

            ProductTranslation::unguard();
            ProductTranslation::create($data);

            $data = [
                'product_id' => $oneCategory->id,
                'locale' => 'en',
                'slug' => $oneCategory->name_m_en,
                'name' => $oneCategory->name_en,
                'des' => $oneCategory->des_en,
                'g_title' => $oneCategory->g_name_en,
                'g_des' => $oneCategory->g_des_en,
            ];
            ProductTranslation::unguard();
            ProductTranslation::create($data);

        }
    }
    public function get_pro_Product_Image()
    {
        $Categories = Product::query()
            ->with('translation')
            ->get()
        ;

        // dd($Categories);

        foreach ($Categories as $Category){
            $file = public_path($Category->photo);
            $saveImage =  Image::make($file);
            $saveDir = 'images/product/'.$Category->id ;
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
            $uploadPath  = public_path('images/product/'.$Category->id);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->slug) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo_thum_1 = $SaveDb ;
            // $Category->webp = 1 ;
            $Category->save() ;

        }
    }


    public function get_pro_more_photo()
    {
        $old_Product = DB::connection('mysql2')->table('product_file')->get();
        foreach ($old_Product as $oneProduct)
        {
            $data = [
                'id' => $oneProduct->id,
                'product_id' => $oneProduct->cat_id,
                'photo' => $oneProduct->photo,
                'photo_thum_1' => $oneProduct->photo_t,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            ProductPhoto::unguard();
            ProductPhoto::create($data);
        }
    }









    public function index_WebPrivacy()
    {
        $old_Category = DB::connection('mysql2')->table('web_privacy')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'id' => $oneCategory->id,
                'name' =>  $oneCategory->h1,
                'postion' => $oneCategory->postion,
                'is_active' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ];

            WebPrivacy::unguard();
            WebPrivacy::create($data);
        }
    }
    public function index_WebPrivacyTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('web_privacy')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'privacy_id' => $oneCategory->id,
                'locale' => 'ar',
                'h1' => $oneCategory->h1,
                'h2' => $oneCategory->h2,
                'des' => $oneCategory->des,
                'lists' => $oneCategory->lists,
            ];

            WebPrivacyTranslation::unguard();
            WebPrivacyTranslation::create($data);

            $data = [
                'privacy_id' => $oneCategory->id,
                'locale' => 'en',
                'h1' => $oneCategory->h1_en,
                'h2' => $oneCategory->h2_en,
                'des' => $oneCategory->des_en,
                'lists' => $oneCategory->lists_en,
            ];

            WebPrivacyTranslation::unguard();
            WebPrivacyTranslation::create($data);

        }
    }


    public function index_OurClient()
    {
        $old_Category = DB::connection('mysql2')->table('web_data_list')->where('cat_name','OurClient')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'id' => $oneCategory->id,
                'photo' => $oneCategory->photo,
                'photo_thum_1' => $oneCategory->photo_t,
                'is_active' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ];
            OurClient::unguard();
            OurClient::create($data);
        }
    }


    public function index_OurClientTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('web_data_list')->where('cat_name','OurClient')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'client_id' => $oneCategory->id,
                'locale' => 'ar',
                'name' => $oneCategory->name,
                'slug' => null,
                'des' => null,
                'g_title' => null,
                'g_des' => null,
            ];

            OurClientTranslation::unguard();
            OurClientTranslation::create($data);

            $data = [
                'client_id' => $oneCategory->id,
                'locale' => 'en',
                'name' => $oneCategory->name_en,
                'slug' => null,
                'des' => null,
                'g_title' => null,
                'g_des' => null,
            ];

            OurClientTranslation::unguard();
            OurClientTranslation::create($data);

        }
    }

    public function index_OurClient_photo()
    {
        $Categories = OurClient::query()
            ->with('translation')
            ->get()
        ;

        // dd($Categories);

        foreach ($Categories as $Category){
            $file = public_path($Category->photo);
            $saveImage =  Image::make($file);
            $saveDir = 'images/client/'.$Category->id ;
            $uploadPath  = public_path($saveDir);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->name) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo = $SaveDb ;
            $Category->save() ;


            $file = public_path($Category->photo_thum_1);
            $saveImage =  Image::make($file);
            $uploadPath  = public_path('images/client/'.$Category->id);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->name) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo_thum_1 = $SaveDb ;

            $Category->save() ;

        }
    }


    public function index_LastNews()
    {
        $old_Category = DB::connection('mysql2')->table('lastnews')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'id' => $oneCategory->id,
                'photo' => $oneCategory->photo,
                'photo_thum_1' => $oneCategory->photo_t,
                'is_active' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
                'published_at' =>now(),
            ];
            BlogPost::unguard();
            BlogPost::create($data);
        }
    }
    public function index_BlogPostTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('lastnews')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'blog_id' => $oneCategory->id,
                'locale' => 'ar',
                'name' => $oneCategory->name,
                'slug' => $oneCategory->name_m,
                'des' => $oneCategory->des,
                'g_title' => $oneCategory->g_name,
                'g_des' => $oneCategory->g_des,
            ];

            BlogPostTranslation::unguard();
            BlogPostTranslation::create($data);

            $data = [
                'blog_id' => $oneCategory->id,
                'locale' => 'en',
                'name' => $oneCategory->name_en,
                'slug' => $oneCategory->name_m_en,
                'des' => $oneCategory->des_en,
                'g_title' => $oneCategory->g_name_en,
                'g_des' => $oneCategory->g_des_en,
            ];
            BlogPostTranslation::unguard();
            BlogPostTranslation::create($data);
        }
    }
    public function index_BlogPost_Photo()
    {
        $Categories = BlogPost::query()
            ->with('translation')
            ->get()
        ;

        // dd($Categories);

        foreach ($Categories as $Category){
            $file = public_path($Category->photo);
            $saveImage =  Image::make($file);
            $saveDir = 'images/blog/'.$Category->id ;
            $uploadPath  = public_path($saveDir);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->name) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo = $SaveDb ;
            $Category->save() ;


            $file = public_path($Category->photo_thum_1);
            $saveImage =  Image::make($file);
            $uploadPath  = public_path('images/blog/'.$Category->id);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->name) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo_thum_1 = $SaveDb ;

            $Category->save() ;

        }
    }


    public function index_Banner()
    {
        $old_Category = DB::connection('mysql2')->table('banner')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'id' => $oneCategory->id,
                'category_id' => $oneCategory->cat_id,
                'photo' => $oneCategory->photo,
                'photo_thum_1' => $oneCategory->photo_t,
                'is_active' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ];
            Banner::unguard();
            Banner::create($data);
        }
    }
    public function index_BannerTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('banner')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'banner_id' => $oneCategory->id,
                'locale' => 'ar',
                'name' => $oneCategory->name,
                'des' => $oneCategory->des,
                'other' => $oneCategory->other,
                'url' => $oneCategory->url,
            ];

            BannerTranslation::unguard();
            BannerTranslation::create($data);

            $data = [
                'banner_id' => $oneCategory->id,
                'locale' => 'en',
                'name' => $oneCategory->name_en,
                'des' => $oneCategory->des_en,
                'other' => $oneCategory->other_en,
                'url' => $oneCategory->url_en,
            ];
            BannerTranslation::unguard();
            BannerTranslation::create($data);
        }
    }
    public function index_BannerPhoto()
    {
        $Categories = Banner::query()
            ->with('translation')
            ->get()
        ;

        // dd($Categories);

        foreach ($Categories as $Category){
            $file = public_path($Category->photo);
            $saveImage =  Image::make($file);
            $saveDir = 'images/banner/'.$Category->id ;
            $uploadPath  = public_path($saveDir);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->name) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo = $SaveDb ;
            $Category->save() ;


            $file = public_path($Category->photo_thum_1);
            $saveImage =  Image::make($file);
            $uploadPath  = public_path('images/banner/'.$Category->id);
            if(!File::isDirectory($uploadPath)){
                File::makeDirectory($uploadPath, 0777, true, true);
            }
            $getName = AdminHelper::Url_Slug($Category->translate('en')->name) ;
            $newName =  AdminHelper::file_newname($uploadPath,$getName.'.webp') ;
            $saveImage->save($uploadPath.'/'.$newName, 65, 'webp');

            $SaveDb = $saveDir."/".$saveImage->basename ;
            $Category->photo_thum_1 = $SaveDb ;

            $Category->save() ;

        }
    }



    public function index_MetaTag()
    {
        $old_Category = DB::connection('mysql2')->table('config_meta')->get();
        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'id' => $oneCategory->id,
                'cat_id' => $oneCategory->cat_id,
                'banner_id' => $oneCategory->banner_id,
                'created_at' =>now(),
                'updated_at' =>now(),
            ];
            MetaTag::unguard();
            MetaTag::create($data);
        }
    }

    public function index_MetaTagTranslation()
    {
        $old_Category = DB::connection('mysql2')->table('config_meta')->get();


        foreach ($old_Category as $oneCategory)
        {
            $data = [
                'meta_tag_id' => $oneCategory->id,
                'locale' => 'ar',
                'g_title' => $oneCategory->g_name,
                'g_des' => $oneCategory->g_des,
                'body_h1' => $oneCategory->header_h3,
                'breadcrumb' => $oneCategory->header_h6,
            ];

            MetaTagTranslation::unguard();
            MetaTagTranslation::create($data);

            $data = [
                'meta_tag_id' => $oneCategory->id,
                'locale' => 'en',
                'g_title' => $oneCategory->g_name_en,
                'g_des' => $oneCategory->g_des_en,
                'body_h1' => $oneCategory->header_h3_en,
                'breadcrumb' => $oneCategory->header_h6_en,
            ];
            MetaTagTranslation::unguard();
            MetaTagTranslation::create($data);
        }
    }

}
