@extends('pages.layout.master')



@section('content')

        <div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
              <div class="text">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Restaurant</span></p>
                <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-room">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">Harbor Lights Rooms</span>
            <h2 class="mb-4">Hotel Master's Rooms</h2>
          </div>
        </div>
            <div class="row no-gutters">
            @foreach($rooms as $room)

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="{{route("public.singleRoom" , ['id'=>$room->id,'available'=>$available])}}" class="img" style="background-image: url({{asset("images/".($room->room_img))}});"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><span class="per mx-2">category</span><a href="{{route("public.singleRoom" , ['id'=>$room->id,'available'=>$available])}}">{{$room->category->category_name}}</a></h3>
           
                                <small class="{{$room->status?'text-danger':'text-success'}} font-weight-bold">{{$room->status?'booked':'available'}}</small>
                                <div class="d-flex justify-content-around">
                                    @if($room->has_sea_view)
                                        <span class="ion-ios-checkmark-circle-outline text-primary h1  position-relative"><span class="h6 text-dark" style="position: absolute;top: 30%;">Sea View</span></span>

                                    @else
                                            <span class="ion-ios-close-circle-outline h1  position-relative"><span class="h6" style="position: absolute;top: 30%;">Sea view</span></span>
                                    @endif
                                        @if($room->has_balcony)
                                    <span class="ion-ios-checkmark-circle-outline text-primary h1  position-relative"><span class="h6 text-dark" style="position: absolute;top: 35%;">Balcony</span></span>
                                        @else
                                    <span class="ion-ios-close-circle-outline h1  position-relative"><span class="h6" style="position: absolute;top: 30%;">Balcony</span></span>
                                        @endif
                                </div>
                                <p class="pt-1"><a href="
                                                    {{route("public.singleRoom" , ['id'=>$room->id,'available'=>$available])}}"
                                                   class="btn-custom px-3 py-2 rounded">View Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>


            @endforeach
            </div>
        </div>
    </section>

    @endsection
