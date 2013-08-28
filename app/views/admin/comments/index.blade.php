@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
	{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
	<div class="page-header">
		<h3>
			{{{ $title }}}
		</h3>
	</div>

<<<<<<< HEAD
	<table id="comments" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="span3">{{{ Lang::get('admin/comments/table.title') }}}</th>
				<th class="span3">{{{ Lang::get('admin/blogs/table.post_id') }}}</th>
				<th class="span2">{{{ Lang::get('admin/users/table.username') }}}</th>
				<th class="span2">{{{ Lang::get('admin/comments/table.created_at') }}}</th>
				<th class="span2">{{{ Lang::get('table.actions') }}}</th>
=======
	<table id="comments" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">{{{ Lang::get('admin/comments/table.title') }}}</th>
				<th class="col-md-3">{{{ Lang::get('admin/blogs/table.post_id') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/users/table.username') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/comments/table.created_at') }}}</th>
				<th class="col-md-2">{{{ Lang::get('table.actions') }}}</th>
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
			</tr>
		</thead>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
			oTable = $('#comments').dataTable( {
<<<<<<< HEAD
				"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
=======
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/comments/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop