@extends('admin/includes/master')
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
    <div class="product-tab-list tab-pane" id="reviews">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                    <div class="row justify-content-center">
                        <div class="col-lg-8     col-md-12 col-sm-12 col-xs-12">
                            <form id="acount-infor" method="post" action="{{route('users.store')}}" class="acount-infor ">
                                @csrf
                                <div class="devit-card-custom">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>



                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                                        <div class="form-select-list">
                                            <select name="role_id" class="form-control w-100">
                                                <option value="" selected>choose the role</option>
                                                @foreach($roles as $role)

                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button style="margin: 10px 0 !important;"  class="btn btn-primary m-auto waves-effect waves-light" >Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
