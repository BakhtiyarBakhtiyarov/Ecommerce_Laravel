<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index($slug){
        $title = 'Product Page';
        $product = Product::where('slug', $slug)->with('detail')->first();
        $contact = Contact::where('is_deleted',0)->first();
        return view('products', compact('title','product','contact'));
    }


    public function search(Request $request){
        $data = $request->search_data;
        $product = Product::where('name','like','%' . $data . '%')->orWhere('description','like','%' . $data . '%')->first();
        // dd($product);
        $contact = Contact::where('is_deleted',0)->first();
        return view('search', compact('product','contact'));
    }
}
