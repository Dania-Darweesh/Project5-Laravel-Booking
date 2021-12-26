<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $category = Category::all();
            return view('admin.Category.viewCategory', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Category.create_Category');
    }

    public function store(Request $request)
    {
        // dd($request->all());   // just to check data
        if ($request->hasFile('category_img')) {
            $file = $request->category_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
        }
        Category::create([      //category :the name of the model 
            "category_name"  => $request->category_name,
            "category_img" => 'uploads/' . $new_file,
        ]);
        return redirect()->route('category.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_operation = Category::find($id);
        return view('admin.Category.edit_category', compact('edit_operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $update_operation = $request->movie_name;
        // $update_operation = $request->movie_description;
        // $update_operation = $request->movie_gener;
        // $update_operation->update($request->all());
        $update_operation = Category::find($id);

        if ($request->hasFile('category_img')) {
            $file = $request->category_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads/', $new_file);

            $update_operation->category_img = 'uploads/'. $new_file ;
        }

        $update_operation->category_name = $request->category_name;
        $update_operation->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_operation = Category::find($id);
        $delete_operation->destroy($id);

        return redirect()->route('category.index');  
    }
}
