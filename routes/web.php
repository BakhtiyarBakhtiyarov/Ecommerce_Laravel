<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/user',function(){
// //     return view('user');
// // })->name('user_route');

// Route::get('/test',function(){
//     return 'test';
// })->name('test');

// Route::get('/user/{id}/{name}',function($id,$name){
//     return 'user :' .$id . ' - ' .$name;
// });

// Route::get('/user/{id?}',function($id=0){
//     return 'user :' .$id ;
// });

// Route::get('/test2',function(){
//     return redirect()->route('test');
// });

// Route::get('api/products',function(){
//     return [
//         ['id'=>1,'slug'=>'product_1','price'=>10.99],
//         ['id'=>2,'slug'=>'product_2'],
//         ['id'=>3,'slug'=>'product_3'],
//         ['id'=>4,'slug'=>'product_4']
//     ];
// });


// Route::get('/user',function (){
//     return view('user');
// })->name('user_route');;


// Route::get('/test',function(){
//     return 'Salam ,laravel';
// })->name('test_route');

// Route::get('/user/{id}',function($id){
//     return 'salam: user,' . $id;
// });

// Route::get('/example', function () {
//     return redirect()->route('test_route');
// });


Route::get('/',[HomePageController::class,'index'])->name('home');
Route::get('/category/{id}',[CategoryController::class,'index'])->name('category.show');
Route::get('/product/{slug_product}', [ProductController::class, 'index'])->name('product.show');
Route::post('/product/search', [ProductController::class, 'search'])->name('product.search');

 Route::get('/control',function (){
     return view('admin.homepage');
 });
//Route::get('/control/category',function (){
//    return view('admin.category');
//});
//Route::get('/control/product',function (){
//    return view('admin.category');
//});

Route::prefix('control')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('login.index');
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/product', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product.update');
    Route::post('/product/delete', [\App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('product.delete');
    Route::get('/slider', [\App\Http\Controllers\Admin\SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/create', [\App\Http\Controllers\Admin\SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [\App\Http\Controllers\Admin\SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/edit/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update', [\App\Http\Controllers\Admin\SliderController::class, 'update'])->name('slider.update');
    Route::post('/slider/delete', [\App\Http\Controllers\Admin\SliderController::class, 'delete'])->name('slider.delete');

});



//Route::view('/', 'homepage');
//Route::view('/products', 'products');
//Route::view('/category', 'category');
