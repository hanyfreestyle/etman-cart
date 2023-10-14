<?php

namespace App\Http\Controllers\customer;
use App\Http\Requests\customer\CancellationConfirmRequest;
use App\Http\Requests\customer\ProfileAddressEditRequest;
use App\Models\admin\Product;
use App\Models\customer\UserCustomersProduct;
use App\Models\shopping\ShoppingOrder;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\customer\ProfileAddressAddRequest;
use App\Http\Requests\customer\ProfilePasswordUpdateRequest;
use App\Http\Requests\customer\ProfileUpdateRequest;
use App\Models\customer\UsersCustomersAddress;
use App\Models\UsersCustomers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

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


        $cities =self::getDataCity() ;
        View::share('cities', $cities);


        $CartContent =  Cart::content();
        View::share('CartContent', $CartContent);


        $SinglePageView = [
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'Customer_Profile',
            'SelMenu' => 'CustomerProfile',
        ];

        $this->SinglePageView = $SinglePageView ;

        $PageMeta = parent::getMeatByCatId('Shop_profiles_pages');
        parent::printSeoMeta($PageMeta);

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  ProfileView
    public function ProfileView()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "profile" ;

        $UserProfile = Auth::guard('customer')->user();

        return view('shop.customer.profile', compact('SinglePageView','UserProfile'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ProfileUpdate
    public function ProfileUpdate(ProfileUpdateRequest $request)
    {
        $UserProfile = Auth::guard('customer')->user();
        $customer = UsersCustomers::def()
            ->where('id',$UserProfile->id)
            ->firstOrFail();

        $customer->name = $request->input('name');
        $customer->company_name = $request->input('company_name');
        $customer->email  = $request->input('email');
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
        $SinglePageView['breadcrumb'] = "Address" ;
        $UserProfile = Auth::guard('customer')->user();

        $customer = UsersCustomers::def()
            ->where('id',$UserProfile->id)
            ->withCount('addresses')
            ->with('addresses')
            ->firstOrFail();

        return view('shop.customer.profile_address_list', compact('SinglePageView','UserProfile','customer'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_Address_Add
    public function Profile_Address_Add(){

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "Address" ;
        $SinglePageView['breadcrumb'] = "Address" ;
        $UserProfile = Auth::guard('customer')->user();

        $customer = UsersCustomers::def()
            ->where('id',$UserProfile->id)
            ->withCount('addresses')
            ->with('addresses')
            ->firstOrFail();

        return view('shop.customer.profile_address_form', compact('SinglePageView','UserProfile','customer'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_Address_Save
    public function Profile_Address_Save(ProfileAddressAddRequest $request)
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "profile" ;

        $UserProfile = Auth::guard('customer')->user();
        $customer = UsersCustomers::def()
            ->where('id',$UserProfile->id)
            ->withCount('addresses')
            ->firstOrFail();

        $saveAddress = New UsersCustomersAddress ;

        if($customer->addresses_count == 0){
            $saveAddress->is_default = true ;
            $saveAddress->name = "العنوان الافتراضى";
        }else{
            $saveAddress->name = 'العنوان '. $customer->addresses_count+1;
        }

        $saveAddress->uuid = Str::uuid()->toString();
        $saveAddress->customer_id = $customer->id ;

        $saveAddress->city_id = $request->input('city_id');
        $saveAddress->recipient_name = $request->input('recipient_name');

        $saveAddress->phone  = $request->input('phone');
        $saveAddress->phone_option  = $request->input('phone_option');
        $saveAddress->address = $request->input('address');
        $saveAddress->save();




        if($request->input('page_type') == 'orders'){
            return redirect()->route('Shop_CartConfirm');
        }else{
            return redirect()->route('Profile_Address')->with('Update.Done',"");
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_Address_Edit
    public function Profile_Address_Edit($uuid){
        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            Auth::guard('customer')->logout();
            return redirect()->route('Customer_login');
        }

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "Address" ;
        $SinglePageView['breadcrumb'] = "Address" ;
        $UserProfile = Auth::guard('customer')->user();

        $address = UsersCustomersAddress::query()
            ->where('uuid',$uuid)
            ->where('customer_id',$UserProfile->id)
            ->firstOrFail();
        return view('shop.customer.profile_address_form_edit',compact('SinglePageView','UserProfile','address'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_Address_Update
    public function Profile_Address_Update(ProfileAddressEditRequest $request,$uuid){
        $isUuid = Str::isUuid($uuid);

        if(!$isUuid){
            Auth::guard('customer')->logout();
            return redirect()->route('Customer_login');
        }


        $UserProfile = Auth::guard('customer')->user();
        $address = UsersCustomersAddress::query()
            ->where('uuid',$uuid)
            ->where('customer_id',$UserProfile->id)
            ->firstOrFail();

        $address->name = $request->input('name');
        $address->city_id = $request->input('city_id');
        $address->recipient_name = $request->input('recipient_name');
        $address->phone  = $request->input('phone');
        $address->phone_option  = $request->input('phone_option');
        $address->address = $request->input('address');
        $address->save();

        return redirect()->route('Profile_Address')->with('Update.Done',"");

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_Address_UpdateDefault
    public function Profile_Address_UpdateDefault($uuid)
    {
        $UserProfile = Auth::guard('customer')->user();

        $all_Address = UsersCustomersAddress::query()
            ->where('customer_id',$UserProfile->id)
            ->get();

        if(count($all_Address) > 0 ){
            foreach ($all_Address as $address){
                if($address->uuid == $uuid ){
                    $address->is_default = true ;
                }else{
                    $address->is_default = false ;
                }
                $address->save();
            }
        }
        return redirect()->back();
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #   Profile_ChangePassword
    public function Profile_ChangePassword()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "ChangePassword" ;
        $SinglePageView['breadcrumb'] = "ChangePassword" ;

        $oldPass = null;
        if(isset($_GET['old'])){
            $oldPass = $_GET['old'];
        }
        return view('shop.customer.profile_change_password', compact('SinglePageView','oldPass'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #   Profile_ChangePasswordUpdate
    public function Profile_ChangePasswordUpdate(ProfilePasswordUpdateRequest $request)
    {

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "ChangePassword" ;
        $hashedPassword = Auth::guard('customer')->user()->password ;
        if(Hash::check($request->input('old_password'),$hashedPassword)){
            $UserProfile = Auth::guard('customer')->user();
            $customer = UsersCustomers::query()
                ->where('id',$UserProfile->id)
                ->where('status',1)
                ->where('is_active',1)
                ->firstOrFail();

            $customer->password = Hash::make($request->input('password'));
            $customer->password_temp = null;
            $customer->save();
            Auth::guard('customer')->logout();
            return redirect()->route('Customer_login');
        }else{
            return redirect()->back()->with('Error',"كلمة المرور التى ادخلتها غير مطابقة");
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_OrdersList
    public function Profile_OrdersList()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "OrdersList" ;
        $SinglePageView['breadcrumb'] = "OrdersList" ;

        $UserProfile = Auth::guard('customer')->user();

        $orders = ShoppingOrder::query()
            ->where('customer_id',$UserProfile->id)
            ->orderBy('order_date','desc')
            ->paginate(12)
        ;
        return view('shop.customer.profile_order_list', compact('SinglePageView','UserProfile','orders')
        );
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_MyProduct
    public function Profile_MyProduct()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "ProfileMyProduct" ;
        $SinglePageView['breadcrumb'] = "ProfileMyProduct" ;
        $SinglePageView['SelMenu'] = "ProfileMyProduct" ;

        $UserProfile = Auth::guard('customer')->user();

        if($this->agent->isMobile() == true and $this->agent->isTablet() == false){
            $proViewList = 'list';
        }else{
            $proViewList = '';
        }

        $customersProduct  = UserCustomersProduct::select('product_id')
            ->where('customer_id',$UserProfile->id)
            ->pluck('product_id');

//        $FavProducts = Product::query()
//            ->where('is_active',true)
//            ->where('is_archived',false)
//            ->where('pro_shop',true)
//            ->whereIn('id',$customersProduct)
//            ->with('category')
//            ->get()
//            ->groupBy('category.*.name')
//
//        ;
        $FavProducts = Product::query()
            ->where('is_active',true)
            ->where('is_archived',false)
            ->where('pro_shop',true)
            ->whereIn('id',$customersProduct)
            ->withAggregate('category','category_id')
            ->orderBy('category_category_id')
            ->paginate(12)
        ;

        return view('shop.customer.profile_my_product',
            compact('SinglePageView','UserProfile','FavProducts','proViewList')
        );
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_OrderView
    public function Profile_OrderView($uuid){
        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            Auth::guard('customer')->logout();
            return redirect()->route('Customer_login');
        }

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "OrdersList" ;
        $SinglePageView['breadcrumb'] = "OrdersList" ;

        $UserProfile = Auth::guard('customer')->user();
        $order = ShoppingOrder::query()
            ->where('uuid',$uuid)
            ->where('customer_id',$UserProfile->id)
            ->with('products')
            ->with('log')
            ->firstOrFail();
        return view('shop.customer.profile_order_view', compact('SinglePageView','UserProfile','order'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Profile_OrderCancellation
    public function Profile_OrderCancellation($uuid){
        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            Auth::guard('customer')->logout();
            return redirect()->route('Customer_login');
        }

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['profileMenu'] = "OrdersList" ;
        $SinglePageView['breadcrumb'] = "OrdersList" ;

        $UserProfile = Auth::guard('customer')->user();
        $order = ShoppingOrder::query()
            ->where('uuid',$uuid)
            ->where('status',1)
            ->where('customer_id',$UserProfile->id)
            ->with('products')
            ->with('log')
            ->firstOrFail();

        return view('shop.customer.profile_order_cancellation', compact('SinglePageView','UserProfile','order'));

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # Profile_CancellationConfirm

    public function Profile_CancellationConfirm(CancellationConfirmRequest $request, $uuid)
    {
        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            Auth::guard('customer')->logout();
            return redirect()->route('Customer_login');
        }

        $UserProfile = Auth::guard('customer')->user();
        $order = ShoppingOrder::query()
            ->where('uuid',$uuid)
            ->where('status',1)
            ->where('customer_id',$UserProfile->id)
            ->with('products')
            ->with('log')
            ->firstOrFail();

        $order->cancellation_date = now();
        $order->cancellation_notes = $request->input('notes');
        $order->status = 5;
        $order->save();

        return  redirect()->route('Profile_OrdersList');

    }





}
