<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserReservationController;
use App\Models\Category;
use App\Models\Review;
use App\Models\room;
use App\Models\User;
use App\Models\UserReservation;
use Illuminate\Support\Facades\Auth;
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
        'number_of_users'=>user::where('role_id',1)->count(),
        'number_of_reservations'=>UserReservation::count(),
        'number_of_reviews'=>Review::count(),
        'user'=>Auth::user(),

    ]);
})->name('admin.dashboard')->middleware('admin.auth');






Route::get('/categories', [RoomController::class,'show_room_from_specific_category'])->name('public.showRoom');
Route::post('/rooms', [UserReservationController::class,'available_rooms'])->name('public.availableRooms');
Route::get('/single-room',[RoomController::class,'single_rooms'])->name('public.singleRoom');


Route::get('/signupTheme',function(){
    return view('pages.signup');
});
Route::get('/loginTheme',function(){
    return view('pages.login');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
