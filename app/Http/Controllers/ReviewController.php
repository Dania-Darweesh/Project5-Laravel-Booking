<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return view('admin.Review.viewReview', [
            'review'=>$review,
            'auth_user'=>Auth::user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.Review.createReview');
    }

    /**
     * Store a newly created resource in storage.
     *
   
     */
    public function store(Request $request)
    {
        $review= new Review();
        $review->review_title = $request->review_title;
        $review->review_body = $request->review_body;
        $review->user_id = $request->user_id;
        $review->meal_id = $request->meal_id;
        $review->save();


        return redirect()->route('single-meal',['id'=>1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_operation = Review::find($id);
        $delete_operation->destroy($id);

        return redirect()->route('review.index');
    }
}
