@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Blog Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($post)){{ URL::to('admin/blogs/' . $post->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Post Title -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('title') ? 'error' : '' }}}">
					<label class="control-label" for="title">Post Title</label>
					<div class="controls">
						<input type="text" name="title" id="title" value="{{{ Input::old('title', isset($post) ? $post->title : null) }}}" />
=======
				<div class="form-group {{{ $errors->has('title') ? 'error' : '' }}}">
                    <div class="col-lg-12">
                        <label class="control-label" for="title">Post Title</label>
						<input class="form-control" type="text" name="title" id="title" value="{{{ Input::old('title', isset($post) ? $post->title : null) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						{{{ $errors->first('title', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ post title -->

				<!-- Content -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('content') ? 'error' : '' }}}">
					<label class="control-label" for="content">Content</label>
					<div class="controls">
						<textarea class="full-width span10 wysihtml5" name="content" value="content" rows="10">{{{ Input::old('content', isset($post) ? $post->content : null) }}}</textarea>
=======
				<div class="form-group {{{ $errors->has('content') ? 'error' : '' }}}">
					<div class="col-lg-12">
                        <label class="control-label" for="content">Content</label>
						<textarea class="form-control full-width wysihtml5" name="content" value="content" rows="10">{{{ Input::old('content', isset($post) ? $post->content : null) }}}</textarea>
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						{{{ $errors->first('content', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ content -->
			</div>
			<!-- ./ general tab -->

			<!-- Meta Data tab -->
			<div class="tab-pane" id="tab-meta-data">
				<!-- Meta Title -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
					<label class="control-label" for="meta-title">Meta Title</label>
					<div class="controls">
						<input type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title', isset($post) ? $post->meta_title : null) }}}" />
=======
				<div class="form-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
					<div class="col-lg-12">
                        <label class="control-label" for="meta-title">Meta Title</label>
						<input class="form-control" type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title', isset($post) ? $post->meta_title : null) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						{{{ $errors->first('meta-title', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta title -->

				<!-- Meta Description -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
					<label class="control-label" for="meta-description">Meta Description</label>
					<div class="controls">
						<input type="text" name="meta-description" id="meta-description" value="{{{ Input::old('meta-description', isset($post) ? $post->meta_description : null) }}}" />
=======
				<div class="form-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
					<div class="col-lg-12 controls">
                        <label class="control-label" for="meta-description">Meta Description</label>
						<input class="form-control" type="text" name="meta-description" id="meta-description" value="{{{ Input::old('meta-description', isset($post) ? $post->meta_description : null) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						{{{ $errors->first('meta-description', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta description -->

				<!-- Meta Keywords -->
<<<<<<< HEAD
				<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
					<label class="control-label" for="meta-keywords">Meta Keywords</label>
					<div class="controls">
						<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', isset($post) ? $post->meta_keywords : null) }}}" />
=======
				<div class="form-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
					<div class="col-lg-12">
                        <label class="control-label" for="meta-keywords">Meta Keywords</label>
						<input class="form-control" type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', isset($post) ? $post->meta_keywords : null) }}}" />
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
						{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta keywords -->
			</div>
			<!-- ./ meta data tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
<<<<<<< HEAD
		<div class="control-group">
			<div class="controls">
=======
		<div class="form-group">
			<div class="col-lg-12">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn">Reset</button>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
