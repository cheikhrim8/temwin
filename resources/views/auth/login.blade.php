@extends('layouts.app')

@section('content')
    <section class="row flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <div class="p-1"><img src="../../../app-assets/images/logo/logo-dark.png"
                                                  alt="branding logo"></div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login with Modern</span>
                        </h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal form-simple" action="{{route('login')}}" method="POST" novalidate>
                                @csrf
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           id="email" name="email" placeholder="{{__('Email')}}"
                                           required>
                                    <div class="form-control-position">
                                        <i class="la la-envelope"></i>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password"
                                           id="password"
                                           placeholder="Enter Password" required>
                                    <div class="form-control-position">
                                        <i class="la la-key"></i>
                                    </div>
                                </fieldset>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                <div class="form-group row">
                                    <div class="col-sm-6 col-12 text-center text-sm-left">
                                        <fieldset>
                                            <input type="checkbox" id="remember-me" class="chk-remember">
                                            <label for="remember-me"> Remember Me</label>
                                        </fieldset>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i> Login
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <p class="float-xl-left text-center m-0">
                                @if (Route::has('password.request'))
                                    <a class="card-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </p>
                            <p class="float-xl-right text-center m-0">Dont't have an account?
                                <a href="{{route('register')}}" class="card-link">{{__('register')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
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
    </div>--}}
@endsection
