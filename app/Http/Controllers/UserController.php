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
        $product = Product::all();
        return view('index' , 
    [
        'product' => $product
    ]
    );
    }
}
