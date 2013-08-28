@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Login into your account</h1>
</div>
<<<<<<< HEAD
<form method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <label for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label>
        <input tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">

        <label for="password">
            {{ Lang::get('confide::confide.password') }}
            <small>
                <a href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
            </small>
        </label>
        <input tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">

        <label for="remember" class="checkbox">{{ Lang::get('confide::confide.login.remember') }}
            <input type="hidden" name="remember" value="0">
            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
        </label>

        @if ( Session::get('error') )
        <div class="alert alert-error">{{ Session::get('error') }}</div>
=======
<form class="form-horizontal" method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label>
            <div class="col-lg-10">
                <input class="form-control" tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="password">
                {{ Lang::get('confide::confide.password') }}
            </label>
            <div class="col-lg-10">
                <input class="form-control" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <div class="checkbox">
                    <label for="remember">{{ Lang::get('confide::confide.login.remember') }}
                        <input type="hidden" name="remember" value="0">
                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    </label>
                </div>
            </div>
        </div>

        @if ( Session::get('error') )
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
        @endif

        @if ( Session::get('notice') )
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

<<<<<<< HEAD
        <button tabindex="3" type="submit" class="btn">{{ Lang::get('confide::confide.login.submit') }}</button>
=======
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button tabindex="3" type="submit" class="btn btn-primary">{{ Lang::get('confide::confide.login.submit') }}</button>
                <a class="btn btn-default" href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
            </div>
        </div>
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
    </fieldset>
</form>

@stop
