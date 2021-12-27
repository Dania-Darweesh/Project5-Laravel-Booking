@extends('admin/includes/master')
@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Reservations list</h4>
                    <div class="add-product">
                        <a href="/admin/userReservation/create">Add reservation</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Room ID</th>
                                <th>User ID</th>
                                <th>Total Price</th>
                                <th>Number Of Days</th>
                                <th>Checkin Date</th>
                                <th>Checkout Date</th>
                                <th>Total_Adults</th>
                                <th>Total Children</th>
                            </tr>
                        </thead>
                        @foreach ($shows as $show)
                        <tr>
                            <td> {{$show-> room_id}}</td>
                            <td> {{$show-> user_id}}</td>
                            <td> {{$show-> total_price}}</td>
                            <td> {{$show-> number_of_days}}</td>
                            <td> {{$show-> checkin_date}}</td>
                            <td> {{$show-> checkout_date}}</td>
                            <td> {{$show-> total_adults}}</td>
                            <td>
                                <form action="{{route('userReservation.destroy',$show->id)}}" method="post">
                                    <a href="{{route('userReservation.edit',$show->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
