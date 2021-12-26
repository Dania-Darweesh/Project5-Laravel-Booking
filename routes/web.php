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

Route::resource('/admin/users', UserController::class);
Route::resource('/admin/categories', CategoryController::class);
Route::resource("/admin/rooms", RoomController::class);
Route::resource('/admin/userReservation', UserReservationController::class);
Route::resource('/admin/meals', MealController::class);
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/review', ReviewController::class);
Route::get('/admin', function () {


    return view('admin.index',[
        "all_rooms"=>room::all()->count(),
        "rooms_booked"=>room::where('status',1)->count(),
        'rooms_available'=>room::where('status',0)->count(),
        'number_of_users'=>user::where('role_id',1)->count(),
        'number_of_reservations'=>UserReservation::count(),
        'number_of_reviews'=>Review::count(),

    ]);
})->name('admin.dashboard');





Route::get('/', function () {
    return view('pages.index',[
        'categories'=>Category::all(),
    ]);
});

Route::get('/categories', [RoomController::class,'show_room_from_specific_category'])->name('public.showRoom');
Route::post('/rooms', [UserReservationController::class,'available_rooms'])->name('public.availableRooms');

