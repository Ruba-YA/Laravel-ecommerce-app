<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->user_type == 'admin')
             {
            return view('admin.dashboard');
        } else if (Auth::check() &&   Auth::user()->user_type == 'user') {
            return view('dashboard');
        }
    }

    public function home()
    {
        if(Auth::check()){
            $count = Cart::where('user_id', Auth::id())->count();
        }
        else{
            $count = 0;
        }
        $product = Product::latest()->take(4)->get();
        return view('index' , compact('product' , 'count')
    );
    }

    public function productDetails($id)
    {
        if(Auth::check()){
            $count = Cart::where('user_id', Auth::id())->count();
        }
        else{
            $count = 0;
        }
        $product = Product::find($id);
        return view('productDetails' , compact('product' , 'count')
    );
    }   

    public function allProduct()
    {
        if(Auth::check()){
            $count = Cart::where('user_id', Auth::id())->count();
        }
        else{
            $count = 0;
        }
        $products = Product::all();
        return view('allProduct' , compact('products' , 'count')
    );
    }
    public function addToCart($id)
    {
       $product = Product::findOrFail($id);
       $product_cart = new Cart();
         $product_cart->user_id = Auth::id();
            $product_cart->product_id = $product->id;
            $product_cart->save();
            return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        if(Auth::check()){
            $count = Cart::where('user_id', Auth::id())->count();
            $cartItems = Cart::where('user_id', Auth::id())->get();
        }
        else{
            $count = 0;
            $cartItems = [];
        }
        
        return view('showCart', compact('cartItems', 'count'));
    }
}
