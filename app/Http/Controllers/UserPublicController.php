<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyCustomException;
use App\Http\Controllers\toast;



class UserPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();

        return view('pages.userProfile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //

    }


    public function update(Request $request)
    {
        //

        $user = Auth::user();
        $user = User::find($user->id);

        /*  $this->validate($request, [
            'name' => 'required|max:255|unique:users,name,'.$user->id
            'email' => 'required|email|max:255|unique:users,email,',
            'password' => 'required',
        ]);

 */
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password == Null) {
            $data = "The password should not be empty";

            return view("pages.userProfile", [
                'data' => $data,
                'user' => $user,

            ]);
        } else {
            $user->password = $request->password;
            $user->update();
            return redirect()->route("userProfile.index");
        }

        /* $input = $request->only('name', 'email', 'password'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
