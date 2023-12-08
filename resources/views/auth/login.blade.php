@extends('layouts.master-auth')

@push('plugin-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/authentication/auth_3.css') }}">
@endpush

@section('content')
    <!-- Main Body Starts -->
    <div class="login-three">
        <div class="container-fluid login-three-container">
            <div class="row main-login-three">
                <div class="col-xl-3 col-lg-3 col-md-2 d-none d-md-block p-0">
                    <div class="login-bg"></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="d-flex flex-column justify-content-between h-100 center-area">
                        <a>{{__('Login')}}</a>
                        <div>
                            <p class="text-dark">{{__('Welcome Back')}}</p>
                            <h2 class="text-black">{{__('Login to Adminstration')}}</h2>
                        </div>
                        <p class="text-dark d-none d-md-block m-0">{{__('SUB Management System')}}</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="d-flex flex-column justify-content-between h-100 right-area">
                        <a class="btn btn-sm w-25 bg-gradient-primary text-white ml-auto"  href="{{ route('register') }}">{{__('Sign up')}}</a>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <div class="login-three-inputs mt-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                <i class="las la-user-alt"></i>
                            </div>
                            <div class="login-three-inputs mt-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="las la-lock"></i>
                            </div>
                            <div class="login-three-inputs check mt-4">
                                <input class="inp-cbx" id="cbx" type="checkbox" style="display: none" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="cbx" for="cbx">
                                <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                </span>
                                I will agree terms and Conditions
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <button class="text-white btn bg-gradient-primary">{{__('Login')}} <i class="las la-key ml-2"></i></button>
                                @if (Route::has('password.request'))
                                <a class="font-13 text-primary" href="{{ route('password.request') }}">{{__('Forgot your Password ?')}}</a>
                                @endif
                            </div>
                        </div>
                        </form>
                        <div class="login-three-social social-logins mt-4">
                            <div class="social-btn bg-gradient-primary">
                                <a href="#" class="fb-btn">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </div>
                            <div class="social-btn bg-gradient-primary">
                                <a href="#" class="twitter-btn">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </div>
                            <div class="social-btn bg-gradient-primary">
                                <a href="#" class="google-btn">
                                    <i class="lab la-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/authentication/auth_2.js') }}"></script>
@endpush

@push('custom-scripts')

@endpush

