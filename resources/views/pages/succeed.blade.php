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
                    <div class="bg-success text-white">
                        <h1 class="text-white">
                            Your room was booked successfully
                        </h1>

                    </div>
                    <h4 class="text-dark "><a class="text-dark"   href="{{route('home')}}"><u>back to the main page</u> </a></h4>
                </div>
            </div>
        </div>
    </section>



@endsection
