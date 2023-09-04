<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Models\admin\OurClient;
use App\Models\admin\OurClientTranslation;
use Illuminate\Http\Request;

class WebPageController extends WebMainController
{


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    HomePage
    public function HomePage()
    {
        $SinglePageView = [
            'SelMenu' => 'HomePage',
            'CatId' => 'HomePage',
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
        ];
        $PageMeta = parent::getMeatByCatId('LatestNews');
        parent::printSeoMeta($PageMeta);

        return view('web.blog_list',compact('SinglePageView','PageMeta'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    FaqList
    public function FaqList ()
    {
        $SinglePageView = [
            'SelMenu' => 'FaqList',
            'CatId' => 'FaqList',
        ];
        $PageMeta = parent::getMeatByCatId('FaqList');
        parent::printSeoMeta($PageMeta);

        return view('web.faq_list',compact('SinglePageView','PageMeta'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs
    public function ContactUs ()
    {
        $SinglePageView = [
            'SelMenu' => 'ContactUs',
            'CatId' => 'ContactUs',
        ];

        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        return view('web.page_contact_us',compact('SinglePageView','PageMeta'));
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

        return view('web.page_contact_us',compact('SinglePageView','PageMeta'));
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
