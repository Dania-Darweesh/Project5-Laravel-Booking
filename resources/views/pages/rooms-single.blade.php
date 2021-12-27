@extends('pages.layout.master')

@section('content')

		<div class="hero-wrap" style="background-image: url('images/maldives-hotel-room-hd-wallpaper.jpg');">
      <div class="overlay">

      <div class="container">

	</div>
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">

          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index-2.html">Home</a></span> <span class="mr-2"><a href="rooms.html">Rooms</a></span> <span>Rooms Single</span></p>

            </div>
          </div>
        </div>

	</div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
                <h1 class="mb-4 bread">Rooms Details</h1>
          			<div class="single-slider owl-carousel">

          				<div class="item">
          					<div class="room-img" style="background-image: url("{{asset(' images/ ' . ($room->room_img))}}");"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url("{{asset(' images/ ' . ($room->room_img))}}");"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url("{{asset(' images/ ' . ($room->room_img))}}");"></div>
          				</div> 
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4">{{$room->category->category_name}}</h2>
    						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
									@if($room->has_balcony)
									<li><span>Balcony:</span> with Balcony</li>
									@else
									<li><span>Balcony:</span> without  Balcony</li>
									@endif
	    							<li><span>Max:</span> {{$room->number_of_beds}} Person</li>

	    						</ul>
	    						<ul class="list ml-md-5">
									@if($room->has_sea_view)
	    							<li><span>View:</span> Sea View</li>
									@else
									<li><span>View:</span>NO Sea View</li>
									@endif
	    							<li><span>Bed:</span> {{$room->number_of_beds}} Bed</li>
	    						</ul>

    						</div>


    	     		</div>


                <div class="col-lg-8 bg-white">
                    <form action="{{route('book_now',["book"=>true])}}" method="post"  class="booking-form" >
                        <div class="row">
                            @csrf

                            <input name="room_id" type="hidden" value="{{$room->id}}" class="form-control">
                            <input name="total_price" type="hidden" value="{{$room->price}}" class="form-control">


                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Check-in Date</label>


                                        <input type="date" name="checkin_date" class="form-control checkin_date_input " placeholder="Check-in date">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Check-out Date</label>
                                        <input type="date" name="checkout_date" class="form-control checkout_date_input " placeholder="Check-out date">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md d-flex">
                                <div class="form-group d-flex align-self-stretch">
                                    <button  type="submit" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block check_room_btn"><span>book now </span></button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>



          	</div>
          </div> <!-- .col-md-8 -->


          <div class="col-lg-4 sidebar ftco-animate pl-md-5">
            <div class="sidebar-box ftco-animate">
              <div class="categories">

                <h1 class="mb-4 bread">&nbsp;</h1>
                <h3>Categories</h3>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=1">King Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=2">Suite Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=3">Family Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=4">Deluxe Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=5">Luxury Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=6">Superior Room</a></li>
              </div>


            </div>



        </div>

        </div>
      </div>

    </section>
        <!-- .section -->


    @endsection
