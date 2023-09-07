<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Models\admin\BlogPost;
use App\Models\admin\config\WebPrivacy;
use App\Models\admin\FaqCategory;
use App\Models\admin\OurClient;


class WebPageController extends WebMainController
{


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    HomePage
    public function HomePage()
    {
        $SinglePageView = [
            'SelMenu' => 'HomePage',
            'CatId' => 'HomePage',
            'slug' => null,
        ];

        $PageMeta = parent::getMeatByCatId('HomePage');
        parent::printSeoMeta($PageMeta);

        return view('web.index',compact('SinglePageView'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs
    public function AboutUs ()
    {
        $SinglePageView = [
            'SelMenu' => 'AboutUs',
            'CatId' => 'AboutUs',
            'slug' => null,
        ];

        $PageMeta = parent::getMeatByCatId('AboutUs');
        parent::printSeoMeta($PageMeta);

        return view('web.page_about',compact('SinglePageView','PageMeta'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    OurClient
    public function OurClient ()
    {
        $SinglePageView = [
            'SelMenu' => 'OurClient',
            'CatId' => 'OurClient',
            'slug' => null,
        ];
        $PageMeta = parent::getMeatByCatId('OurClient');
        parent::printSeoMeta($PageMeta);

        $OurClients = OurClient::defWeb()->paginate(12);

        return view('web.page_our_client',compact('SinglePageView','PageMeta','OurClients'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    LatestNews
    public function LatestNews ()
    {
        $SinglePageView = [
            'SelMenu' => 'LatestNews',
            'CatId' => 'LatestNews',
            'slug' => null,
        ];
        $PageMeta = parent::getMeatByCatId('LatestNews');
        parent::printSeoMeta($PageMeta);

        $BlogPosts =  BlogPost::defWeb()->paginate(12);

        return view('web.blog_list',compact('SinglePageView','PageMeta','BlogPosts'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    LatestNews
    public function LatestNews_View ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);
        $Post  = BlogPost::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();


        if ($Post->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('LatestNews_View', $Post->translate()->slug);
        }


       $SinglePageView = [
            'SelMenu' => 'LatestNews',
            'CatId' => 'LatestNews',
            'slug' => 'latest-news/'.$Post->translate(webChangeLocale())->slug,
        ];
        $PageMeta = parent::getMeatByCatId('LatestNews');
        parent::printSeoMeta($PageMeta);

        $BlogPosts =  BlogPost::defWeb()->where('id','!=',$Post->id)->limit(2)->get();

        return view('web.blog_view',compact('SinglePageView','PageMeta','Post','BlogPosts'));
    }




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    FaqList
    public function FaqList ()
    {
        $SinglePageView = [
            'SelMenu' => 'FaqList',
            'CatId' => 'FaqList',
            'slug' => null,
        ];
        $PageMeta = parent::getMeatByCatId('FaqList');
        parent::printSeoMeta($PageMeta);

        $FaqCategories = FaqCategory::defWeb()->paginate(12);

       return view('web.faq_list',compact('SinglePageView','PageMeta','FaqCategories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     FaqCatView
    public function FaqCatView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);

        $FaqCategory  = FaqCategory::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();

        if ($FaqCategory->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
             return redirect()->route('Page_FaqCatView', $FaqCategory->translate()->slug);
        }

        $SinglePageView = [
            'SelMenu' => 'FaqList',
            'CatId' => 'FaqList',
            'slug' => 'faq/'.$FaqCategory->translate(webChangeLocale())->slug,
        ];

        $PageMeta = $FaqCategory ;
        parent::printSeoMeta($PageMeta);

        $FaqCategories = FaqCategory::defWeb()
            ->where('id','!=',$FaqCategory->id)
            ->get();






        return view('web.faq_cat_view',compact('SinglePageView','PageMeta','FaqCategory','FaqCategories'));




    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs
    public function ContactUs ()
    {
        $SinglePageView = [
            'SelMenu' => 'ContactUs',
            'CatId' => 'ContactUs',
            'slug' => null,
        ];

        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        $FaqCategories = FaqCategory::defWeb()
            ->get();

        return view('web.page_contact_us',compact('SinglePageView','PageMeta','FaqCategories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs
    public function TermsConditions ()
    {
        $SinglePageView = [
            'SelMenu' => 'TermsConditions',
            'CatId' => 'TermsConditions',
        ];

        $PageMeta = parent::getMeatByCatId('TermsConditions');
        parent::printSeoMeta($PageMeta);

        $Terms = WebPrivacy::where('is_active',true)
            ->with('translation')
            ->orderBy('postion','asc')
            ->get();

        return view('web.page_term_conditions',compact('SinglePageView','PageMeta','Terms'));
    }






#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs












}
