<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Banner;
use Illuminate\Http\Request;

class WebPageController extends WebMainController
{

    public function HomePage()
    {

        $SinglePageView = [
            'SelMenu' => 'HomePage',
            'CatId' => 'HomePage',
        ];

        $Banner_def = Banner::query()
            ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;


        return view('web.index',compact('SinglePageView','Banner_def'));
    }






    public function AboutUs ()
    {

        $SinglePageView = [
            'SelMenu' => 'AboutUs',
        ];
        $Banner_def = Banner::query()
            ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;



        return view('web.index',compact('SinglePageView','Banner_def'));
    }

    public function OurClient ()
    {

        $SinglePageView = [
            'SelMenu' => 'OurClient',
        ];
        $Banner_def = Banner::query()
            ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;



        return view('web.index',compact('SinglePageView','Banner_def'));
    }


    public function LatestNews ()
    {

        $SinglePageView = [
            'SelMenu' => 'LatestNews',
        ];
        $Banner_def = Banner::query()
            ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;



        return view('web.index',compact('SinglePageView','Banner_def'));
    }

    public function FaqList ()
    {

        $SinglePageView = [
            'SelMenu' => 'FaqList',
        ];
        $Banner_def = Banner::query()
            ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;



        return view('web.index',compact('SinglePageView','Banner_def'));
    }


    public function ContactUs ()
    {

        $SinglePageView = [
            'SelMenu' => 'ContactUs',
        ];
        $Banner_def = Banner::query()
            ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;



        return view('web.index',compact('SinglePageView','Banner_def'));
    }


}
