<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerSignUpRequest;
use App\Http\Requests\UsersCustomersRequest;
use App\Models\admin\Product;
use App\Models\UsersCustomers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UsersCustomersController extends WebMainController
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

        $CartList = Product::with('translation')->inRandomOrder()->limit(2)->get();
        View::share('CartList', $CartList);

        $RecentProduct = Product::with('translation')->inRandomOrder()->limit(4)->get();
        View::share('RecentProduct', $RecentProduct);

        $SinglePageView = [
            'SelMenu' => '',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',

        ];

        $this->SinglePageView = $SinglePageView ;
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CustomerLogin
    public function CustomerLogin()
    {
        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['breadcrumb'] = "Customer_Login" ;
        $SinglePageView['SelMenu'] = "CustomerProfile" ;


        return view('shop.customer.login',compact('SinglePageView','PageMeta'));
    }

    
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CustomerCreate
    public function CustomerCreate(CustomerSignUpRequest $request)
    {

        $user = new UsersCustomers();

        $user->name = $request->input('name');
        $user->email =$request->input('email');
        $user->phone =$request->input('phone');
        $user->password = \Hash::make($request->password);
        $user->save();

//        $user->name = "hany";
//        //$user->email = rand(1000,50000)."name@email.com";
//        $user->email = "29038name@email.com";
//        $user->phone ="01221563252";
//        $user->password = \Hash::make("01221563252");

        try {
            $user->save();
            Auth::guard('customer')->login($user);

        } catch (\Exception $e) {
            $err =  $e->getMessage();
            return redirect()->back()->with('err',"dddddd");

        }


        return redirect()->route('Customer_Profile');



    }





#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #CustomerLoginCheck
    public function CustomerLoginCheck(UsersCustomersRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $remember = ($request->input('remember')=='on')?true:false;
        $credentials  =$request->only('email',"password");
        if(Auth::guard('customer')->attempt($credentials)){
            //  if(Auth::guard('customer')->attempt(['email' => $email, 'password' => $password], $remember)){
            return redirect()->route('Customer_Profile');
        }else{
            return  redirect()->route('Customer_login');
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
#
    public function CustomerSignUp()
    {
        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['breadcrumb'] = "Customer_Register" ;
        $SinglePageView['SelMenu'] = "CustomerProfile" ;

        return view('shop.customer.register',compact('SinglePageView','PageMeta'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CustomerLogout
    public function CustomerLogout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('Shop_HomePage');
    }

}
