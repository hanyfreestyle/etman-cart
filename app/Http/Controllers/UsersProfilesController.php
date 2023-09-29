<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UsersProfilesController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();
        Auth::viaRemember();
        $stopCash = 0 ;
        $ShopMenuCategory = self::getShopMenuCategory($stopCash);
        View::share('ShopMenuCategory', $ShopMenuCategory);

        $SinglePageView = [
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'Customer_Profile',
            'SelMenu' => 'CustomerProfile',
        ];

        $this->SinglePageView = $SinglePageView ;

        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);

    }
/*
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  CustomerProfile
    public function CustomerProfile()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "profile" ;

        $UserProfile = Auth::guard('customer')->user();
        return view('shop.customer.profile',
            compact('SinglePageView','UserProfile')
        );
    }
*/


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #   Profile_ChangePassword
    public function Profile_ChangePassword()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "ChangePassword" ;

        $UserProfile = Auth::guard('customer')->user();

        return view('shop.customer.profile_change_password',
            compact('SinglePageView','UserProfile')
        );

    }







}
