@extends('pages.layout.master')
@section('content')

<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5 ">
                    <div class="booking-cta">
                        <h1 id="h1">The HarporLight Hotel</h1>
                        <p>The HarporLight Hotel is one of the finest historic Annapolis hotels and the only one located directly on the harbor. Its prime location places you in the heart of this charming maritime town and offers inspiring Chesapeake Bay views, plus easy access to shops, eateries, attractions, and the United States Naval Academy
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7  ">
                    <div class="booking-form">


                        <div class="d-flex">
                            <div class="w-100">
                                <h3 id="c">Sign In</h3>
                            </div>

                        </div>
                        <div class="d">
                            <form action="#" class="signin-form">

                                <div class="form-group mb-3">

                                    <input  id="ground11" placeholder="Email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">

                                    <input type="password" id="ground22" placeholder="Password" required   class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button id="signin" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0" id="remember">Remember Me
                                            <input type="checkbox" checked name="remember"  {{ old('remember') ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot Password</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="text-center">Not a member? <a id="signup" data-toggle="tab" href="#signup">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
