@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title($post->title) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop

{{-- Content --}}
@section('content')
<h3>{{ $post->title }}</h3>

<p>{{ $post->content() }}</p>

<div>
	<span class="badge badge-info">Posted {{{ $post->date() }}}</span>
</div>

<hr />

<a id="comments"></a>
<h4>{{{ $comments->count() }}} Comments</h4>

@if ($comments->count())
@foreach ($comments as $comment)
<div class="row">
<<<<<<< HEAD
	<div class="span1">
		<img class="thumbnail" src="http://placehold.it/60x60" alt="">
	</div>
	<div class="span11">
		<div class="row">
			<div class="span11">
=======
	<div class="col-md-1">
		<img class="thumbnail" src="http://placehold.it/60x60" alt="">
	</div>
	<div class="col-md-11">
		<div class="row">
			<div class="col-md-11">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
				<span class="muted">{{{ $comment->author->username }}}</span>
				&bull;
				{{{ $comment->date() }}}
			</div>

<<<<<<< HEAD
			<div class="span11">
				<hr />
			</div>

			<div class="span11">
=======
			<div class="col-md-11">
				<hr />
			</div>

			<div class="col-md-11">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
				{{{ $comment->content() }}}
			</div>
		</div>
	</div>
</div>
<hr />
@endforeach
@else
<hr />
@endif

@if ( ! Auth::check())
You need to be logged in to add comments.<br /><br />
Click <a href="{{{ URL::to('user/login') }}}">here</a> to login into your account.
@elseif ( ! $canComment )
You don't have the correct permissions to add comments.
@else
<h4>Add a Comment</h4>
<<<<<<< HEAD
<form method="post" action="{{{ URL::to($post->slug) }}}">
	<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

	<textarea class="input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

	<div class="control-group">
		<div class="controls">
=======
<form  method="post" action="{{{ URL::to($post->slug) }}}">
	<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

	<textarea class="col-md-12 input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

	<div class="form-group">
		<div class="col-lg-12">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
			<input type="submit" class="btn" id="submit" value="Submit" />
		</div>
	</div>
</form>
@endif
@stop
