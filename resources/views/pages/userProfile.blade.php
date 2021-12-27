@extends('pages.layout.master')



@section('content')



<div id="profile" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">

                <div class="product-status-wrap">

                    <div class="wrapp">

                        <div class="containerss">
                            <h4 id="info">User Information</h4>
                            <form id="acount-infor" method="post" action="{{route('userProfile.update',$user->id)}}" class="acount-infor ">
                                @csrf
                                @method('PUT')
                                <div class="devit-card-custom">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{$user->email}}" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password" placeholder="Password">
                                        <div class="text-danger font-weight-bold">{{ $data??''}}</div>


                                    </div>

                                    <button style="margin: 10px 0 " class="btn btn-primary m-auto waves-effect waves-light">Submit</button>
                                    <!--  <a href="#" style="margin: 10px 0 !important;" class="btn btn-primary m-auto waves-effect waves-light">Back To Home</a> -->
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

@endsection