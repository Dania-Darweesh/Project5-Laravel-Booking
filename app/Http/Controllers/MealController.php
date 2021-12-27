<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    public function index()
    {
        //
        $meals = Meal::all();
        return view('admin.meal.index',[
            'meals'=>$meals,
            'auth_user'=>Auth::user(),
        ]);
    }

    /**

     */
    public function create()
    {
        //
        return view('admin.meal.create',[
            'auth_user'=>Auth::user(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        //

        if ($request->hasFile('meal_img')) {
            $file = $request->meal_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
        }
        Meal::create([      //Movies :the name of the model
            "name"  => $request->name,
            "price"  => $request->price,
            "description" => $request->description,
            "meal_img" => 'uploads/' . $new_file,

        ]);

        return redirect()->route('meal.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        //
        $mealEdit = Meal::find($id);
        return view('admin.meal.edit', [
            'mealEdit'=>$mealEdit,
            'auth_user'=>Auth::user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        //

        $mealEdit = Meal::find($id);
        if ($request->hasFile('meal_img')) {
            $file = $request->meal_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
            //photo
            $mealEdit->meal_img = 'uploads/' . $new_file;
        }

        $mealEdit->name = $request->name;
        $mealEdit->description = $request->description;
        $mealEdit->price = $request->price;

        // call update func
        $mealEdit->update();
        return redirect()->route('meals.index');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        //
        $mealDestroy = Meal::find($id);
        $mealDestroy->destroy($id);
        return redirect()->route('meals.index');
    }
}
