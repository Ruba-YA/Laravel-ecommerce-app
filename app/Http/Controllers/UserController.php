<?php
namespace App\Http\Controllers;

use App\Models\Product;
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
        $product = Product::latest()->take(4)->get();
        return view('index' , 
    [
        'product' => $product
    ]
    );
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('productDetails' , 
    [
        'product' => $product
    ]
    );
    }   

    public function allProduct()
    {
        $products = Product::all();
        return view('allProduct' , 
    [
        'products' => $products
    ]
    );
    }
    public function addToCart()
    {
        return "Add to Cart";
    }
}
