<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserReservationController;
use App\Http\Controllers\UserPublicController;

use App\Models\Category;
use App\Models\Review;
use App\Models\room;
use App\Models\Meal;
use App\Models\User;
use App\Models\UserReservation;
use Illuminate\Support\Facades\Auth;
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

Route::resource('/admin/users', UserController::class)->middleware('super_admin.auth');
Route::resource('/admin/categories', CategoryController::class)->middleware('admin.auth');
Route::resource("/admin/rooms", RoomController::class)->middleware('admin.auth');
Route::resource('/admin/userReservation', UserReservationController::class)->middleware('admin.auth');
Route::resource('/admin/meals', MealController::class)->middleware('admin.auth');
Route::resource('/admin/category', CategoryController::class)->middleware('admin.auth');
Route::resource('/admin/review', ReviewController::class)->middleware('admin.auth');
Route::get('/admin', function () {


    return view('admin.index',[
        "all_rooms"=>room::all()->count(),
        "rooms_booked"=>room::where('status',1)->count(),
        'rooms_available'=>room::where('status',0)->count(),
        'number_of_users'=>user::all()->where('role_id',1)->count(),
        'number_of_reservations'=>UserReservation::count(),
        'number_of_reviews'=>Review::count(),
        'auth_user'=>Auth::user(),

    ]);
})->name('admin.dashboard')->middleware('admin.auth');



//Osaid
Route::post('/saveReview', [ReviewController::class,'store'])->name('public.storeReview');


Route::get('/categories', [RoomController::class,'show_room_from_specific_category'])->name('public.showRoom');
Route::get('/allRooms', [RoomController::class,'show_all_available_rooms'])->name('public.showAllRooms');
Route::post('/rooms', [UserReservationController::class,'available_rooms'])->name('public.availableRooms');
Route::get('/single-room',[RoomController::class,'single_rooms'])->name('public.singleRoom');
//this route for booing
Route::post('/book',[UserReservationController::class,'store'])->name('book_now')->middleware('auth');




Route::get('/signupTheme',function(){
    return view('pages.signup');
});


// we need to change the url

Route::get('/pages/restaurant-single', function (Meal $id,Request $request) {
    // dd('helllllllllllo');
  
    $meal    = Meal::find($request->id);
    $reviews = Review::where('meal_id', $request->id)->get();

    return view('pages.restaurant-single',[

        'meal'   => $meal ,
        'reviews'=> $reviews 

    ]);

})->name('single-meal');


Route::get('/pages/restaurant', function () {
    $meals = Meal::all();
    return view('pages.restaurant',['meals'=>$meals]);
})->name('restaurant');

Route::get('/pages/rooms-single', function () {
    return view('pages.rooms-single');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return view('pages.index',[
        'categories'=>Category::all(),
        'meals' => Meal::take(6)->get(),
    ]);
})->name('guest_home');

Route::resource('/pages/userProfile', UserPublicController::class);
