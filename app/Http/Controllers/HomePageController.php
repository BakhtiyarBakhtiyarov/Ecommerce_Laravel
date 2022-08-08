<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
   public function index()
   {
       $title = 'Home Page';
       $categories = Category::where('is_deleted', 0)->get();
//       $new_products = Product::all(); //lazy loading // join product_table və is_new=1 olanlar

       $new_products = Product::select('product.*','product_detail.image as img')
           ->join('product_detail', 'product_detail.product_id', 'product.id')
           ->where('product_detail.is_new', 1)
           ->orderBy('product.id','DESC')
           ->take(4)
           ->get();
//       $new_products = DB::table('product')->select('product.*','product_detail.image as img')
//           ->join('product_detail', 'product_detail.product_id', 'product.id')
//           ->where('product_detail.is_new', 1)
//           ->get();

//       dd($new_products);
       $best_sellers = Product::select('product.*','product_detail.image as img')
           ->join('product_detail', 'product_detail.product_id', 'product.id')
           ->where('product_detail.is_bestseller', 1)
           ->get();;

       $on_sales = Product::select('product.*','product_detail.image as img')
           ->join('product_detail', 'product_detail.product_id', 'product.id')
           ->where('product_detail.is_on_sale', 1)
           ->get();

       $chance = Product::select('product.*','product_detail.image as img')
       ->join('product_detail', 'product_detail.product_id', 'product.id')
       ->where('product_detail.is_chance', 1)
       ->first();

       $sliders = Slider::where('is_deleted',0)->get();
       $contact = Contact::where('is_deleted',0)->first();

       return view('homepage',compact('title','categories','new_products','best_sellers','on_sales','sliders','chance','contact'));
   }
}
