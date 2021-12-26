@extends('admin/includes/master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can update reservation here</h4>

                    <form method="post" action="{{route('userReservation.update',$userReservationEdit->id)}}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">
                                <!-- <div class="form-group">
                                    <label for="room_id" class="form-label">Room ID</label>
                                    <input name="room_id" type="number" class="form-control" value="{{$userReservationEdit->room_id}}">
                                </div>
                                <div class="form-group">
                                    <label for="-user_id" class="form-label">User ID</label>
                                    <input name="user_id" type="number" class="form-control" value="{{$userReservationEdit->user_id}}">
                                </div> -->
                                <div class="form-group">
                                    <label for="total_price" class="form-label">Total Price</label>
                                    <input name="total_price" type="number" class="form-control" value="{{$userReservationEdit->total_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="number_of_days" class="form-label">Number Of Days</label>
                                    <input name="number_of_days" type="number" class="form-control" value="{{$userReservationEdit->number_of_days}}">
                                </div>
                                <div class="form-group">
                                    <label for="checkin_date" class="form-label">Checkin Date</label>
                                    <input name="checkin_date" type="text" class="form-control" value="{{$userReservationEdit->checkin_date}}">
                                </div>
                                <div class="form-group">
                                    <label for="checkout_date" class="form-label">Checkout Date</label>
                                    <input name="checkout_date" type="text" class="form-control" value="{{$userReservationEdit->checkout_date}}">
                                </div>
                                <div class="form-group">
                                    <label for="total_adults" class="form-label">Total Adults</label>
                                    <input name="total_adults" type="number" class="form-control" value="{{$userReservationEdit->total_adults}}">
                                </div>


                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
