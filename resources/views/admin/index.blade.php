@extends('admin/includes/master')
@section('content')

<div class="traffice-source-area mg-b-30 m-auto" style="width: 80vw !important;padding: 1%;padding-top: 2%!important;">
    <div class="white-box">
    <h1>Welcome {{$auth_user->name}}</h1>
    <p>Here is all the statistics you need for the website</p>
</div>
</div>
<div class="traffice-source-area ">
    <div class="container-fluid" style="padding:1% !important;">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs">
                    <h3 class="box-title">Total Rooms</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r d-flex"> <span class="counter text-success"><span class="counter h1">{{$all_rooms}}</span></span>
                         <span>Rooms</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                    <h3 class="box-title">Rooms Available</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right graph-two-ctn"><span class="counter text-purple"><span class="counter">{{$rooms_available   }}</span></span>
                            <span>Rooms</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Rooms booked</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn"> <span class="text-danger"><span class="counter">{{$rooms_booked}}</span></span>
                            <span>Rooms</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffic-analysis-area">
    <div class="container-fluid" style="padding: 1% !important;">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu">
                    <i class="fa fa-user"></i>
                    <div class="social-edu-ctn">
                        <h3>{{$number_of_users}}</h3>
                        <p>Registered users</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                <i class="fa fa-calendar-check-o"></i>
                    <div class="social-edu-ctn">
                        <h3>{{$number_of_reservations}}</h3>
                        <p>All Reservations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-star"></i>
                    <div class="social-edu-ctn">
                        <h3>{{$number_of_reviews}}</h3>
                        <p>All meals Reviews</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection
