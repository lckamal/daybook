@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.settings') }}} ::
@parent
@stop

{{-- New Laravel 4 Feature in use --}}
@section('styles')
@parent
body {
	background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h3>Edit your settings</h3>
</div>
<form class="form-horizontal" method="post" action="{{ URL::to('user/' . $user->id . '/edit') }}"  autocomplete="off">
    <!-- CSRF Token -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <!-- ./ csrf token -->
    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <!-- username -->
<<<<<<< HEAD
        <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
            <label class="control-label" for="username">Username</label>
            <div class="controls">
                <input type="text" name="username" id="username" value="{{{ Input::old('username', $user->username) }}}" />
=======
        <div class="form-group {{{ $errors->has('username') ? 'error' : '' }}}">
            <label class="col-lg-2 control-label" for="username">Username</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" name="username" id="username" value="{{{ Input::old('username', $user->username) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
                {{{ $errors->first('username', '<span class="help-inline">:message</span>') }}}
            </div>
        </div>
        <!-- ./ username -->

        <!-- Email -->
<<<<<<< HEAD
        <div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="text" name="email" id="email" value="{{{ Input::old('email', $user->email) }}}" />
=======
        <div class="form-group {{{ $errors->has('email') ? 'error' : '' }}}">
            <label class="col-lg-2 control-label" for="email">Email</label>
            <div class="col-lg-10">
                <input class="form-control" type="text" name="email" id="email" value="{{{ Input::old('email', $user->email) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
                {{{ $errors->first('email', '<span class="help-inline">:message</span>') }}}
            </div>
        </div>
        <!-- ./ email -->

        <!-- Password -->
<<<<<<< HEAD
        <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" name="password" id="password" value="" />
=======
        <div class="form-group {{{ $errors->has('password') ? 'error' : '' }}}">
            <label class="col-lg-2 control-label" for="password">Password</label>
            <div class="col-lg-10">
                <input class="form-control" type="password" name="password" id="password" value="" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
                {{{ $errors->first('password', '<span class="help-inline">:message</span>') }}}
            </div>
        </div>
        <!-- ./ password -->

        <!-- Password Confirm -->
<<<<<<< HEAD
        <div class="control-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
            <label class="control-label" for="password_confirmation">Password Confirm</label>
            <div class="controls">
                <input type="password" name="password_confirmation" id="password_confirmation" value="" />
=======
        <div class="form-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
            <label class="col-lg-2 control-label" for="password_confirmation">Password Confirm</label>
            <div class="col-lg-10">
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" value="" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
                {{{ $errors->first('password_confirmation', '<span class="help-inline">:message</span>') }}}
            </div>
        </div>
        <!-- ./ password confirm -->
    </div>
    <!-- ./ general tab -->

    <!-- Form Actions -->
<<<<<<< HEAD
    <div class="control-group">
        <div class="controls">
=======
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    <!-- ./ form actions -->
</form>
</form>
@stop
