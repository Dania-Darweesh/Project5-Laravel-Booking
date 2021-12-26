<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Models\Meal;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::get('/pages', function () {
    return view('pages.index');
})->name('home');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/pages/restaurant-single', function (Request $request) {
    // dd('helllllllllllo');
    $meal    = Meal::find($request->id);
    $reviews = Review::where('meal_id', $request->id)->get();

    return view('pages.restaurant-single',[

        'meal'   =>$meal,
        'reviews'=>$reviews 

    ]);

})->name('single-meal');


Route::get('/pages/restaurant', function () {
    return view('pages.restaurant');
});

Route::get('/pages/rooms-single', function () {
    return view('pages.rooms-single');
});

// Route::get('/admin/category', function () {
//     return view('admin.html.Category.Category');
// });

// Route::get('/admin/category', function () {
//     return view('admin.html.Category');
// });


// Route::get('/admin/viewCategory', [CategoryController::class, 'index']);
// Route::get('/admin/createCategory', [CategoryController::class, 'create']);
// Route::get('/admin/editCategory', [CategoryController::class, 'edite']);
// Route::post('/admin/storeCategory', [CategoryController::class, 'store'])->name('category.store');

Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/review', ReviewController::class);






