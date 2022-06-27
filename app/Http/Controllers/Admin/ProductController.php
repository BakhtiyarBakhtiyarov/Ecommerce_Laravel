<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('detail')->where('is_deleted', 0)->get();
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_deleted', 0)->get();
        return view('admin.product.create');
    }

}