<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\customer\ProfileUpdateRequest;
use App\Models\data\DataCity;
use App\Models\UsersCustomers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ProfileController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();

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

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  ProfileView
    public function ProfileView()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "profile" ;

        $UserProfile = Auth::guard('customer')->user();

        $cities = DataCity::all();

        return view('shop.customer.profile',
            compact('SinglePageView','UserProfile','cities')
        );
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ProfileUpdate
    public function ProfileUpdate(ProfileUpdateRequest $request)
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "profile" ;

        $UserProfile = Auth::guard('customer')->user();
        $customer = UsersCustomers::query()
            ->where('id',$UserProfile->id)
            ->where('status',1)
            ->where('is_active',1)
            ->firstOrFail();

        $customer->name = $request->input('name');
        $customer->company_name = $request->input('company_name');
        $customer->phone  = $request->input('phone');
        $customer->whatsapp = $request->input('whatsapp');
        $customer->land_phone = $request->input('land_phone');
        $customer->city_id = $request->input('city_id');

        $customer->save();
        return redirect()->route('Customer_Profile')->with('Update.Done',"");

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #   Profile_Address_List
    public function Profile_Address_List()
    {

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "Address" ;
        $UserProfile = Auth::guard('customer')->user();


        return view('shop.customer.profile_address_list',
            compact('SinglePageView','UserProfile')
        );
    }




}
