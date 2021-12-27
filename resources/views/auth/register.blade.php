@extends('pages.layout.master')
@section('content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>The HarporLight Hotel</h1>
                            <p>The HarporLight Hotel is one of the finest historic Annapolis hotels and the only one located directly on the harbor. Its prime location places you in the heart of this charming maritime town and offers inspiring Chesapeake Bay views, plus easy access to shops, eateries, attractions, and the United States Naval Academy
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">


                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 id="c">Sign Up</h3>
                                </div>

                            </div>
                            <div class="d">
                                <form method="POST" action="{{ route('register') }}" class="signup-form">
                                    @csrf
                                    <div class="form-group mb-3">

                                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="ground1" placeholder="Full Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">

                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="ground2" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">

                                        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="ground3" placeholder="Password" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                        <div class="form-group mb-3">
                                            <input id="ground3" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                    <div class="form-group">
                                        <button type="submit" id="signin" class="form-control btn btn-primary submit px-3">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <p>I'm already a member! <a id="signup" data-toggle="tab" href="#signin">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
