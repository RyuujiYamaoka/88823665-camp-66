<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductList;
use App\Models\User;

class ProductController extends Controller
{
    function index(){
        $product_list = ProductList::all();
        $category = Category::all();
        $user = User::all();
        $data['category'] = $category;
        $data['product'] = $product_list;
        $data['user'] = $user;
        return view('product', $data);
    }

    function add_product(Request $req){
        $category = new Category();
        $category->name = $req->category_name;
        $category->save();

        foreach($req->product_name as $value){
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }

        return redirect('/product');
    }
}
