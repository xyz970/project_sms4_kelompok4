<?php

use App\Http\Controllers\ManagementUserController;
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

Route::resource('user',ManagementUserController::class); //otomatis mengambil nama function dan menyesuaikan http requestnya

Route::get('home',function(){
    return view('admin.dashboard');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin',function(){
//     return "hello world";
// })->name('admin');

// Route::get('hello/{nama}',function($nama){
//     return "Hello ".$nama;
// });

// Route::get('regex/huruf/{str}',function($str){
//     return $str;
// })->where('huruf','[A-Za-z]+');

// Route::get('user/{id}/detail',function($id){
//     return "id =>".$id."\n Nama => Muhammad Adi Saputro";
// });

// Route::get('get/product/{cat?}',function($cat = '*'){
//     if ($cat == '*') {
//         return "tampilkan semua (*) produk";
//     } else {
//         return "tampilkan sesuai $cat produk";
//     }

// });

// Route::group(['prefix'=>'product','as'=>'product.','middleware'=>''],function(){
//     Route::get('/{id}',function($id){
//         return "product ".$id;
//     });
//     Route::post('insert/',function(){
//         return "Insert product";
//     });
//     Route::delete('remove/{id}',function($id){
//         return "delete product $id";
//     });
//     Route::patch('update/{id}',function($id){
//         return "update product $id";
//     });

// });

/**
 * 
 * Pembelajaran dasar Routing
 */
 