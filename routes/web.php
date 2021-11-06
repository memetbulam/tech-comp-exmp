<?php

use App\Phone;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

// $phones değişkenine Phone modelinden 6 veri getirir.
// $comparePhones değişkenine Phone modelinden "id,brand ve model" getirilir.
// welcome sayfasına yönlendirilir.
Route::get('/', function () {
    $phones = Phone::take(6)->get();
    $comparePhones = Phone::all(['id', 'phone_brand', 'phone_model']);
    return view('welcome', ['phones' => $phones, 'comparePhones' => $comparePhones]);
});

// $phones değişkenine Phone modelinden 6 ürün sayfalanır.
// loadMore sayfasına yönlendirilir.
Route::get('/load-more', function () {
    $phones = Phone::paginate(6);
    return view('loadMore', ['phones' => $phones]);
});

// $phone değişkenine Phone modelinden "id" gönderilir.
// productModal sayfasına yönlendirilir.
Route::get('/product/{id}', function ($id) {
    $phone = Phone::findOrFail($id);
    return view('productModal', ['phone' => $phone]);
});

// $phone1 ve $phone2 değişkenlerine Phone Modelinden iki tane id getirilir.
// compare sayfasına yönlendirilir.
Route::get('/compare/{id1}/{id2}', function ($id1, $id2) {
    $phone1 = Phone::findOrFail($id1);
    $phone2 = Phone::findOrFail($id2);
    return view('compare', ['phone1' => $phone1, 'phone2' => $phone2]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
