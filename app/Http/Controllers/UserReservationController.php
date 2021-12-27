<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\UserReservation;
use App\Http\Requests\StoreUserReservationRequest;
use App\Http\Requests\UpdateUserReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserReservationController extends Controller
{
    public function index()
    {
        //
        $shows = UserReservation::all();
        return view('admin.userReservation.show', compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.userReservation.create');
    }


    public function store(Request $request)
    {
        //

        /* dd($request->all());  */ // just to check data

        UserReservation::create([
            "room_id"        => $request->room_id,
            "user_id"        => $request->user_id,
            "total_price"    => $request->total_price,
            "number_of_days" => $request->number_of_days,
            "checkin_date"   => $request->checkin_date,
            "checkout_date"  => $request->checkout_date,
            "total_adults"   => $request->total_adults,



        ]);

        return redirect()->route("userReservation.index");
    }


    public function show(Request $request)
    {
        //

    }



    public function edit($id)
    {
        //
        $userReservationEdit = UserReservation::find($id);
        return view('admin.userReservation.edit', compact('userReservationEdit'));
    }


    public function update(Request $request, $id)
    {
        //
        $userReservationEdit = UserReservation::find($id);


//        $userReservationEdit->room_id = $request->room_id;
//        $userReservationEdit->user_id = $request->user_id;
        $userReservationEdit->total_price = $request->total_price;
        $userReservationEdit->number_of_days = $request->number_of_days;
        $userReservationEdit->checkin_date = $request->checkin_date;
        $userReservationEdit->checkout_date = $request->checkout_date;
        $userReservationEdit->total_adults = $request->total_adults;


        // call update func
        $userReservationEdit->update();
        return redirect()->route("userReservation.index");
    }


    public function destroy(UserReservation $userReservation)
    {
        //
        $userReservation->delete();
        return redirect()->route("userReservation.index");
    }
    public function available_rooms(Request $req){

        //SQL QUERY

//        $availableRooms=collect(DB::Select("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM user_reservations
//                                        WHERE {$req->checkin_date} BETWEEN checkin_date AND checkout_date)"));

        $checkin=UserReservation::where('checkout_date','>=',"{$req->checkin_date}")
                                ->where('checkin_date','<=',"{$req->checkin_date}")
                                ->get("room_id");
        $availableRooms=room::whereNotIn('id',$checkin)->get();
        $availableRooms= $availableRooms->where('category_id',$req->category_id)
                                         ->where('number_of_beds',$req->number_of_beds);

//        return $availableRooms;
//        //filter the rooms according to category and number of beds


       return view('pages.rooms',[
           'rooms'=>$availableRooms,

       ]);


    }
}
