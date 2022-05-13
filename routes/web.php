<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\aboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\FileController;
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


Auth::routes();

Route::middleware(['auth','admin'])->group( 
   function()
   {

   //توجيه  السلايدر 
   Route::get('/slider', [SliderController::class,'index']);
   Route::get('/delete/{id}', [SliderController::class,'destroy']);
   Route::post('/store', [SliderController::class, 'store']);
   
   //توجيه السوشال ميديا  
   Route::get('/social', [SocialmediaController::class,'index']);
   Route::get('/delsoc/{id}', [SocialmediaController::class,'destroy']);
   Route::post('/storesocial', [SocialmediaController::class, 'store']);
   Route::get('/edit/{id}', [SocialmediaController::class, 'edit']);
   Route::post('/edit', [SocialmediaController::class, 'update']);
   Route::post('/storeabout', [aboutController::class, 'store']);
Route::get('/addnewabout', [aboutController::class, 'add']);
Route::get('/delabout/{id}', [aboutController::class,'destroy']);
Route::get('/editabout/{id}', [aboutController::class, 'edit']);
Route::post('/updateabout', [aboutController::class, 'update']);
   });

//توجسه  من نحن 
Route::get('/about-us', [aboutController::class, 'AboutUs']);





 




Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/w/show/{id}', [ProductController::class,'show']);
Route::get('/w/showslider/{id}', [SliderController::class,'show']);

//MainFunction  Home / Products  / about us   / contactus   / services
Route::get('/admin', [ProductController::class, 'admin']);
Route::get('/about-us', [aboutController::class, 'AboutUs']);
Route::get('/contact-us', [ContactController::class, 'contactus']);







Route::middleware('auth')->group( 
    function()
    {

 Route::get('/pn', [ProductController::class, 'product_name'])->name('ecommerce-products');
 Route::get('/pd', [ProductController::class, 'product_description'])->name('ecommerce-products');
 Route::get('/pp', [ProductController::class, 'product_price'])->name('ecommerce-products');
 Route::get('/pu', [ProductController::class, 'product_number'])->name('ecommerce-products');
 Route::get('/pb', [ProductController::class, 'product_brand'])->name('ecommerce-products');
 Route::get('/pc', [ProductController::class, 'product_category'])->name('ecommerce-products');
 Route::get('/ecommerce-products/sh', [ProductController::class,'search'])->name('result_search');
 
});

 Route::middleware('auth')->group( 
    function()
    {
 Route::get('/groub-by-pp', [ProductController::class, 'grobpby_product_price'])->name('ecommerce-products');
 Route::get('/groub-by-pb', [ProductController::class, 'grobpby_product_brand'])->name('ecommerce-products');
 Route::get('/groub-by-pc', [ProductController::class, 'grobpby_product_category'])->name('ecommerce-products');
   });


 // search page
 



 

 Route::get('/show_details/{id}', [ProductController::class,'show_details'])->name('show_details');
 Route::get('file-details',[FileController::class, 'index']);





Route::middleware(['auth','admin'])->group( 
   function()
   {

      Route::post('/newproduct/store', [ProductController::class, 'store'])->name('newproduct');
      Route::get('/newproduct', [ProductController::class, 'create'])->name('newproduct');     
   
   });





