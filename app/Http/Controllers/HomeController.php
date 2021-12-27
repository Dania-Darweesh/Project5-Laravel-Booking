<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $name= Auth::user()->role->name;
        if ($name==="admin" || $name==="super_admin") {

           return  redirect()->route('admin.dashboard');

        }

        return  view('pages.index',[
            'categories'=>Category::all(),
            'meals'=>Meal::take(6)->get() ,
        ]);



    }
}
