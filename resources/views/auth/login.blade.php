@extends('layouts.login')

@section('scripts')
{{ Html::script('public/assets/theme/pofo/customize/js/login.js?v='.date('Y-m-d H:i')) }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <section class="p-0 bg-extra-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 full-screen p-0 cover-background d-none d-lg-block" style="background-image:url('http://placehold.it/1400x1400');"></div>
            <div class="col-12 col-lg-6 full-screen bg-black p-0">
                <div class="position-relative full-screen">
                    <div class="slider-typography text-center sm-overflow-auto">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle padding-three-all sm-padding-15px-all">
                                <div class="margin-nine-bottom md-margin-50px-bottom sm-margin-15px-bottom"><img src="{{ asset('public/assets/theme/pofo/default/images/logo-white.png') }}"
data-rjs="{{ asset('public/assets/theme/pofo/default/images/logo-white@2x.png') }}" alt="Pofo" /></div>
<h6 class="font-weight-300 text-white-2 margin-40px-bottom sm-margin-35px-bottom">We’re getting ready to launch</h6>
<div data-enddate="2020/01/01 12:00:00" class="countdown text-center counter-box-3 margin-nine-bottom"></div>
<div class="bg-extra-dark-gray padding-eight-all border-radius-6 width-70 lg-width-80 sm-width-100 mx-auto sm-padding-30px-all">
    <h6 class="font-weight-300 text-white-2 margin-20px-bottom sm-margin-15px-bottom">Our website is under construction</h6>
    <p class="text-medium width-70 mx-auto margin-40px-bottom sm-width-100 sm-margin-15px-bottom">We'll be here soon with our new awesome site, subscribe to be notified.</p>
    <div id="success-subscribe-newsletter" class="mx-0"></div>
    <div class="input-group add-on width-75 mx-auto md-width-100">
        <input name="username" id="username" class="form-control" placeholder="Enter your email address" type="text" required autocomplete="username" autofocus>
    </div><br />
    <div class="input-group add-on width-75 mx-auto md-width-100">
        <input name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" type="password" required
        autocomplete="current-password">

        <div class="input-group-append">
            <button id="button-subscribe-newsletter" class="btn btn-default btn-login"><i class="ti-angle-right text-small text-white m-0" aria-hidden="true"></i></button>
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
</section> --}}
@endsection
