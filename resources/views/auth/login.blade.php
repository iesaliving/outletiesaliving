@extends('layouts.login')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    @if(\Session::has('message'))
                        <p class="alert alert-info">
                            {{ \Session::get('message') }}
                        </p>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>
                            <div class="login-logo">
                               <img class="rounded mx-auto img-fluid w-25" src="{{ asset('img/logo-header.png')}}">
                            </div>
                        </h1>
                        <p class="text-muted">{{ trans('global.login') }}</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="{{ trans('global.login_email') }}">

                             @error('email')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ trans('global.login_password') }}">

                            @error('password')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                            @enderror
                        </div>
                        <div class="row">
                          <div class="col-6">
                             <input type="submit" class="btn btn-primary px-4" value='{{ trans('global.login') }}'>
                                <label class="ml-2">
                                    <input name="remember" type="checkbox" /> {{ trans('global.remember_me') }}
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
