<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

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
        if(Cart::where('product_id',$cart->product_id)
                ->where('user_id',$cart->user_id)
                ->get()->count()==0){
            $cart->save();
        }
        return redirect('/');
    }
    function logout()
    {
        Session()->flush();
        return redirect('login');
    }
    function cartlist()
    {
        $user_id=Session()->get('user')->id;
        $products=DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user_id)
             ->select('products.*')
            ->get();
        return view('cartlist',['products'=>$products]);
    }
    function delete_from_cart(Request $req)
    {
        $cart=new Cart();
        $cart->user_id=$req->session()->get('user')->id;
        $cart->product_id=$req->product_id;
        DB::table('carts')->where('product_id','=',$cart->product_id)
            ->where('user_id','=',$cart->user_id)->delete();
        return redirect('cartlist');
    }

    function ordernow(){
        $user_id=Session()->get('user')->id;
        $price= DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user_id)
            ->sum('products.price');
        return view('ordernow',['total'=>$price]);
    }
}
