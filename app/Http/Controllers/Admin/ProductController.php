<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_deleted', 0)->get();
        return view('admin.product',compact('products'));
    }
}

class ProductDetailController extends Controller
{
    public function index()
    {
        $product_detail = ProductDetail::where('is_deleted', 0)->get();
        return view('admin.product',compact('product_details'));
    }
}
