<?php
namespace App\Http\Controllers;

use App\Models\admin\Post;
use App\Models\admin\shop\Order;

class HomeController extends WebMainController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Dashboard
    public function Dashboard ()
    {

        $newOrder = Order::query()
            ->where('status',1)
            ->with('customer')
            ->get();


        $pendingOrder = Order::query()
            ->where('status',2)
            ->with('customer')
            ->get();

        $recipientOrder = Order::query()
            ->where('status',3)
            ->with('customer')
            ->get();



        return view('admin.dashbord',compact('newOrder','pendingOrder','recipientOrder'));
    }


    public function index()
    {

    }



}
