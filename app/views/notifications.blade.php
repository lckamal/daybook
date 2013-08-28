@if (count($errors->all()) > 0)
<<<<<<< HEAD
<div class="alert alert-error alert-block">
=======
<div class="alert alert-danger alert-block">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	Please check the form below for errors
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Success</h4>
    @if(is_array($message))
        @foreach ($message as $m)
            {{ $m }}
        @endforeach
    @else
        {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('error'))
<<<<<<< HEAD
<div class="alert alert-error alert-block">
=======
<div class="alert alert-danger alert-block">
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Warning</h4>
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Info</h4>
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif
