<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug){
        $title = 'Product Page';
        $product = Product::where('slug', $slug)->with('detail')->first();
        return view('products', compact('title','product'));
    }


    public function search(Request $request){
        $data = $request->search_data;
        $product = Product::where('name','like','%' . $data . '%')->orWhere('description','like','%' . $data . '%')->first();
        // dd($product);
        return view('search', compact('product'));
    }
}
