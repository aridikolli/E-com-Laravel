<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function index(){
        $products=Product::all();
        return view('product',['products'=>$products]);
    }

    function detail($id)
    {
        $product= Product::find($id);
        return view('detail',['product'=>$product]);
    }

    function search(Request $req){

        $result=Product::where('name','LIKE', "%$req->search%")->get();
        return view('search',['products'=>$result]);

    }

    function cart(Request $req)
    {
        $cart=new Cart();
        $cart->user_id=$req->session()->get('user')->id;
        $cart->product_id=$req->product_id;
        if(Cart::where('product_id',$cart->product_id)->get()->count()==0){
            $cart->save();
        }
        return redirect('/');
    }
    function logout()
    {
        Session()->flush();
        return redirect('login');
    }
}
