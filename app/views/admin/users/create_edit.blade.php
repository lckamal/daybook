@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Create User Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($user)){{ URL::to('admin/users/' . $user->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- username -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="text" name="username" id="username" value="{{{ Input::old('username', isset($user) ? $user->username : null) }}}" />
=======
				<div class="form-group {{{ $errors->has('username') ? 'error' : '' }}}">
					<label class="col-lg-2 control-label" for="username">Username</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="username" id="username" value="{{{ Input::old('username', isset($user) ? $user->username : null) }}}" />
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
						<input type="text" name="email" id="email" value="{{{ Input::old('email', isset($user) ? $user->email : null) }}}" />
=======
				<div class="form-group {{{ $errors->has('email') ? 'error' : '' }}}">
					<label class="col-lg-2 control-label" for="email">Email</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="email" id="email" value="{{{ Input::old('email', isset($user) ? $user->email : null) }}}" />
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

				<!-- Activation Status -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('activated') || $errors->has('confirm') ? 'error' : '' }}}">
					<label class="control-label" for="confirm">Activate User?</label>
					<div class="controls">
=======
				<div class="form-group {{{ $errors->has('activated') || $errors->has('confirm') ? 'error' : '' }}}">
					<label class="col-lg-2 control-label" for="confirm">Activate User?</label>
					<div class="col-lg-10">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						@if ($mode == 'create')
							<select name="confirm" id="confirm">
								<option value="1"{{{ (Input::old('confirm', 0) === 1 ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.yes') }}}</option>
								<option value="0"{{{ (Input::old('confirm', 0) === 0 ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.no') }}}</option>
							</select>
						@else
							<select{{{ ($user->id === Confide::user()->id ? ' disabled="disabled"' : '') }}} name="confirm" id="confirm">
								<option value="1"{{{ ($user->confirmed ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.yes') }}}</option>
								<option value="0"{{{ ( ! $user->confirmed ? ' selected="selected"' : '') }}}>{{{ Lang::get('general.no') }}}</option>
							</select>
						@endif
						{{{ $errors->first('confirm', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ activation status -->

				<!-- Groups -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('roles') ? 'error' : '' }}}">
	                <label class="control-label" for="roles">Roles</label>
	                <div class="controls">
=======
				<div class="form-group {{{ $errors->has('roles') ? 'error' : '' }}}">
	                <label class="col-lg-2 control-label" for="roles">Roles</label>
	                <div class="col-lg-10">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
		                <select name="roles[]" id="roles[]" multiple>
		                        @foreach ($roles as $role)
									@if ($mode == 'create')
		                        		<option value="{{{ $role->id }}}"{{{ ( in_array($role->id, $selectedRoles) ? ' selected="selected"' : '') }}}>{{{ $role->name }}}</option>
		                        	@else
										<option value="{{{ $role->id }}}"{{{ ( array_search($role->id, $user->currentRoleIds()) !== false && array_search($role->id, $user->currentRoleIds()) >= 0 ? ' selected="selected"' : '') }}}>{{{ $role->name }}}</option>
									@endif
		                        @endforeach
						</select>

						<span class="help-block">
							Select a group to assign to the user, remember that a user takes on the permissions of the group they are assigned.
						</span>
	            	</div>
				</div>
				<!-- ./ groups -->
			</div>
			<!-- ./ general tab -->

		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
<<<<<<< HEAD
		<div class="control-group">
			<div class="controls">
=======
		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn">Reset</button>
				<button type="submit" class="btn btn-success">OK</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop