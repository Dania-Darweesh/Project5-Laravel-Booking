<?php

namespace App\Http\Controllers;



use App\Models\Category;
use App\Models\room;
use App\Models\UserReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoomController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $rooms = Room::all();
        return view('admin.rooms.rooms',[
            'rooms'=>$rooms,
            'categories'=>$categories,
            'auth_user'=>Auth::user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {   $categories = Category::all();
        return view('admin.rooms.add', [
            'categories'=>$categories,
            'auth_user'=>Auth::user(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->room_img->getClientOriginalName();//get the name of the file with the extention

        $request->room_img->move(public_path('images'), $newImageName);
        $room  = new room(); // object from the model
        $room->category_id      = $request->category_id;
        $room->number_of_beds       = $request->number_of_beds;
        $room->price                = $request->price;
        $room->has_balcony          = $request->has_balcony ;
        $room->has_sea_view        = $request->has_sea_view ;
        $room->status               = $request->status  ;
        $room->room_img             = $newImageName;

        //object from model / attribute name / request object from class request store the data from the form
        $room->save();
        return redirect()->route("rooms.index");//movies here is the url
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(room $room)
    {
        $categories = Category::all();
        return view ("admin.rooms.edit" ,[
            'room'=>$room,
            'categories'=>$categories,
            'auth_user'=>Auth::user(),
        ]);

        // $categories = Category::all();
        // return view('admin.rooms.index',[
        //     "room" -> $room ,
        //     "categories" -> $categories ,

        // ]);
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, room $room)
    {
        $room -> update(request()->all());
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy(room $room)
    {
      $check_dependency= UserReservation::where('room_id',$room->id)->get();
      if($check_dependency->isEmpty()){
          $room -> delete();
      }


        return redirect()->route('rooms.index');
    }
//-------------------------------------------------------------------------------------------------------------------
//public
    public function show_room_from_specific_category(Request $res){
        //get all the rooms associated with the categories
        if($res['public']??null){
            //status 1==room is booked
            //show all the room associated with a specific category ,and it's not booked.
            //we should bring back the status of the room to 0 after checkout
            $rooms= Room::all()
                        ->where('category_id',$res['category_id']);


            return view("pages.rooms",[
                'rooms'=>$rooms,
                'available'=>false,
            ]);

        }



    }
    public function single_rooms(Request $request )
    {  $room = room::find($request-> id );
        $categories = Category::all();
        return view('pages.rooms-single',compact('room' ,'categories'));
    }
    public function show_all_available_rooms(Request $request){
        $rooms=Room::all();
        return view('pages.rooms',[
           'rooms'=>$rooms,
           'available'=>$request->available,
        ]);



    }
    

}
