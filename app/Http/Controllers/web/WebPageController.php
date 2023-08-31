<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Banner;
use Illuminate\Http\Request;

class WebPageController extends WebMainController
{
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {

        $Banner_def = Banner::query()
        ->where('category_id',1)
            ->orderBy('postion')
            ->get()
        ;

        $Banner_def2 = Banner::query()
            ->where('category_id',2)
            ->orderBy('postion')
            ->get()
        ;

//        $Meta = parent::getMeatByCatId('home');
//        parent::printSeoMeta($Meta);
        return view('web.index',compact('Banner_def','Banner_def2'));
    }
}
