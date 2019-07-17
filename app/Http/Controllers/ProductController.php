<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Auth;

class ProductController extends Controller
{

 public function index()
    {
        $products = Product::all();
        return view('product.index')->with('products', $products);
    }

    public function create()
    {
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        $categories = Category::all();
        return view ('product.create')
        ->with('categories', $categories)
        ->with('count', $count);
    }
}