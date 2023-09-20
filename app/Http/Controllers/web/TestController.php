<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test()
    {
//        $categories = Category::rootCategory()
//            ->where('is_active',true)
//            ->where('cat_shop',true)
//            ->with('translation')
//            ->withCount('children_shop')
//            ->with('children_shop')
//            ->withCount('category_with_product_shop')
//            ->with('category_with_product_shop')
//            ->withCount('recursive_product_shop')
//            ->get();






        $categories = Category::with('recursive_product_shop')->get();
      // dd($categories);

//        $categories =  Category::where('parent_id', null)->get()->each(function(&$item) {
//            $item->products_count = $item->countTotalProducts();
//        });

       // dd($categories);

        return view('test',compact('categories'));
    }
}
