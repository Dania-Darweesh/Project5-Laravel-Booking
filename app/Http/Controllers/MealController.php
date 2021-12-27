<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        //
        $meals = Meal::all();
        return view('admin.meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.meal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMealRequest  $request
     * @return \Illuminate\Http\Response
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

        return redirect()->back();
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
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mealEdit = Meal::find($id);
        return view('admin.meal.edit', compact('mealEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealRequest  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
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
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mealDestroy = Meal::find($id);
        $mealDestroy->destroy($id);
        return redirect()->route('meals.index');
    }
}
