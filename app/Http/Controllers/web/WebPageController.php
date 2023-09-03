<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Banner;
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
        return view('web.index',compact('SinglePageView'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    LatestNews
    public function LatestNews ()
    {

        $SinglePageView = [
            'SelMenu' => 'LatestNews',
            'CatId' => 'LatestNews',
        ];
        return view('web.index',compact('SinglePageView'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    FaqList
    public function FaqList ()
    {
        $SinglePageView = [
            'SelMenu' => 'FaqList',
            'CatId' => 'FaqList',
        ];
        return view('web.index',compact('SinglePageView'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    AboutUs
    public function ContactUs ()
    {
        $SinglePageView = [
            'SelMenu' => 'ContactUs',
            'CatId' => 'ContactUs',
        ];

        return view('web.index',compact('SinglePageView'));
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
