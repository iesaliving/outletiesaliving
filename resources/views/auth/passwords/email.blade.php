@extends('layouts.login')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h1>
                           
                              <div class="login-logo">
                               <img class="rounded mx-auto img-fluid w-25" src="{{ asset('img/logo-header.png')}}">
                            </div>
                        </h1>
                        <p class="text-muted"></p>
                        <div>
                            @csrf
                            <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control" required="required"="autofocus" placeholder="{{ trans('global.login_email') }}">
                                @if($errors->has('email'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </em>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    {{ trans('global.reset_password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection