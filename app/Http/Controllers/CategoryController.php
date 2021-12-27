<?php

namespace App\Http\Controllers;



use App\Models\Category;
use App\Models\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.Category.viewCategory', [
            'category'=>$category,
            'auth_user'=>Auth::user(),
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('admin.Category.create_Category',[
            'auth_user'=>Auth::user(),
        ]);
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

     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        $edit_operation = Category::find($id);
        return view('admin.Category.edit_category', [
            'edit_operation'=>$edit_operation,
            'auth_user'=>Auth::user(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *

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

     */
    public function destroy($id)
    {
        $delete_operation = Category::find($id);

            $$delete_operation -> delete();

        return redirect()->route('category.index');
    }
}
