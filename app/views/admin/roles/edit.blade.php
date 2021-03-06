@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
			<li><a href="#tab-permissions" data-toggle="tab">Permissions</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Role Form --}}
	<form class="form-horizontal" method="post" action="" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Name -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="control-label" for="name">Name</label>
					<div class="controls">
						<input type="text" name="name" id="name" value="{{{ Input::old('name', $role->name) }}}" />
=======
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="col-lg-2 control-label" for="name">Name</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', $role->name) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						{{{ $errors->first('name', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ name -->
			</div>
			<!-- ./ general tab -->

			<!-- Permissions tab -->
			<div class="tab-pane" id="tab-permissions">
<<<<<<< HEAD
				<div class="controls">
					<div class="control-group">
						@foreach ($permissions as $permission)
						<label>
							<input type="hidden" id="permissions[{{{ $permission['id'] }}}]" name="permissions[{{{ $permission['id'] }}}]" value="0" />
							<input type="checkbox" id="permissions[{{{ $permission['id'] }}}]" name="permissions[{{{ $permission['id'] }}}]" value="1"{{{ (isset($permission['checked']) && $permission['checked'] == true ? ' checked="checked"' : '')}}} />
							{{{ $permission['display_name'] }}}
						</label>
						@endforeach
					</div>
=======
				<div class="form-group">
					@foreach ($permissions as $permission)
					<label>
						<input type="hidden" id="permissions[{{{ $permission['id'] }}}]" name="permissions[{{{ $permission['id'] }}}]" value="0" />
						<input type="checkbox" id="permissions[{{{ $permission['id'] }}}]" name="permissions[{{{ $permission['id'] }}}]" value="1"{{{ (isset($permission['checked']) && $permission['checked'] == true ? ' checked="checked"' : '')}}} />
						{{{ $permission['display_name'] }}}
					</label>
					@endforeach
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
				</div>
			</div>
			<!-- ./ permissions tab -->
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
				<button type="submit" class="btn btn-success">Update Role</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
