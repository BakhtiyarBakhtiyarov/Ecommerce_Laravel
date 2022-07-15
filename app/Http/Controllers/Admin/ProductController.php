<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('admin.product.create',compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {

        if($request->hasFile('product_detail_image'))
        {
            $image = $request->file('product_detail_image');
            $name = Str::random(16) . '.' . $image->getClientOriginalExtension();
            $directory = public_path('img/product_images');
            $image->move($directory, $name);
            // unlink - update zamani kohne seklin silinmesi
        }

        $product = new Product();

            $product->name = $request->product_name;
            $product->slug = Str::slug($request->product_name);
            $product->description = $request->product_description;
            $product->category_id = $request->category_id;
            $product->price = $request->product_price;

        
        $product_detail = new ProductDetail();
        
            $product_detail->product_id = $product->id;
            $product_detail->is_bestseller = $request->is_bestseller ?? 0;
            $product_detail->is_new = $request->is_new ?? 0;
            $product_detail->is_on_sale = $request->is_bestseller ?? 0;
            $product_detail->is_chance = $request->is_chance ?? 0;

        if ($product)
        {
            return redirect()->route('product.index')->with('success','Melumat ugurla elave olundu!!!');
        }
        else{
            return redirect()->route('product.create')->with('errors','Xeta bas verdi!!!');
        }
    }

    public function edit($id)
    {
        $product = Product::where('id',$id)->first();
        return view('admin.product.edit',compact('product'));
    }

    public function update(ProductStoreRequest $request)
    {
        $product = Product::where('id',$request->id_product)->update([
            'name'      => $request->product_name,
            'slug'       => Str::slug($request->product_name),
            'description'   => $request->product_description,
            'category_id'   => $request->category_id,
            'price'         => $request->product_price
        ]);

        $product_detail = ProductDetail::where('id',$request->id_product)->update([
            'product_id'      => $product->id,
            'is_bestseller'   => $request->is_bestseller ?? 0,
            'is_new'          => $request->is_new ?? 0,
            'is_on_sale'         => $request->is_bestseller ?? 0,
            'is_chance'          => $request->is_chance ?? 0

        ]);
        
        
        if ($product && $product_detail)
        {
            return redirect()->route('product.index')->with('success','Melumat ugurla redakte olundu!!!');
        }
        else{
            return redirect()->route('product.index')->with('errors','Xeta bas verdi!!!');
        }
    }
    public function delete(Request $request){

        $product = Product::where('id',$request->id)->with('detail')->update([
            'is_deleted'      => 1
        ]);

       
                if($product){
                    return "ok";
                }
                else{
                    return "no";
                }
            }
}