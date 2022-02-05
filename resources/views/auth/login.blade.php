@extends('layouts.guest')
@section('page-content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <h4 class="card-subtitle line-on-side text-muted text-center pt-2">
                                        <span>Login</span>
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="flash-message">
                                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                @if(Session::has('alert-' . $msg))
                                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                                                        <a href="#" class="close"
                                                           data-dismiss="alert"
                                                           aria-label="close">&times;</a>
                                                    </p>
                                                @endif
                                            @endforeach
                                        </div>

                                        <form class="form-horizontal form-simple"
                                              action="{{url('admin/login')}}" novalidate method="post">
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="email"
                                                       name="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       id="user-name"
                                                       placeholder="E-mail" required>
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </fieldset>
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <fieldset class="form-group position-relative has-icon-left my-2">
                                                <input type="password"
                                                       name="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       id="user-password"
                                                       placeholder="Mot de passe" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me">{{__('auth.remember me')}}</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <input value="1" type="hidden" name="type">
                                            <button type="submit" class="btn btn-info btn-block"><i
                                                    class="ft-unlock"></i> {{__('auth.login')}}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
