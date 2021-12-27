<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //

        return view('admin.users.index',[
            'users'=>User::all()->sortByDesc('role_id')->whereNotIn('id',Auth::user()->id),
            'auth_user'=>Auth::user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {

        return view('admin.users.create',[
            'roles'=>Role::all(),
            'auth_user'=>Auth::user(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role_id'=>'required',
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->role_id=$request->role_id;
        $user->save();
        return view('admin.users.index',[
            'users'=>User::all()->sortByDesc('role_id'),
            'auth_user'=>Auth::user(),
        ]);




    }

    /**
     * Display the specified resource.
     *

     */
    public function show(User $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {

        return view("admin.users.edit",[
            'user'=>user::find($id),
            'roles'=>Role::all(),
            'auth_user'=>Auth::user(),

        ]);
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role_id'=>'required',
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->role_id=$request->role_id;
        $user->save();

        return redirect()
                ->route('users.index')
                ->with('success','the user is added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('success','The user has been deleted successfully');
    }
}
