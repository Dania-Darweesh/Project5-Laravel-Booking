<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\UserReservation;
use App\Http\Requests\StoreUserReservationRequest;
use App\Http\Requests\UpdateUserReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserReservationController extends Controller
{
    public function index()
    {
        //
        $shows = UserReservation::all();
        return view('admin.userReservation.show',[
            'shows'=>$shows,
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
        //
        return view('admin.userReservation.create',[
            'auth_user'=>Auth::user(),
        ]);
    }


    public function store(Request $request)
    {


        /* dd($request->all());  */ // just to check data
        $number_of_days=(strtotime($request->checkout_date)-(strtotime($request->checkin_date)))/(3600*24);



      $reservation = new UserReservation();
            $reservation->room_id     =  $request->room_id;
            $reservation->user_id     =   Auth::user()->id;
            $reservation->total_price  =   $request->total_price;
            $reservation->number_of_days = $number_of_days;
            $reservation->checkin_date  =  $request->checkin_date;
            $reservation->checkout_date = $request->checkout_date;
            $reservation->total_adults   = 2;
            $reservation->save();





        if($request->book){
            return view('pages.succeed');
        }

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
           'available'=>'true',
//           'checkin_date'=>$req->checkin_date,
//           'checkout_date'=>$req->checkout_date,

       ]);


    }
}
