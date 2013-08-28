@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
	{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
	<div class="page-header">
		<h3>
			Role Management

			<div class="pull-right">
				<a href="{{{ URL::to('admin/roles/create') }}}" class="btn btn-small btn-info iframe"><i class="icon-plus-sign icon-white"></i> Create</a>
			</div>
		</h3>
	</div>

<<<<<<< HEAD
	<table id="roles" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="span6">{{{ Lang::get('admin/roles/table.name') }}}</th>
				<th class="span2">{{{ Lang::get('admin/roles/table.users') }}}</th>
				<th class="span2">{{{ Lang::get('admin/roles/table.created_at') }}}</th>
				<th class="span2">{{{ Lang::get('table.actions') }}}</th>
=======
	<table id="roles" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-6">{{{ Lang::get('admin/roles/table.name') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/roles/table.users') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/roles/table.created_at') }}}</th>
				<th class="col-md-2">{{{ Lang::get('table.actions') }}}</th>
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
				oTable = $('#roles').dataTable( {
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
		        "sAjaxSource": "{{ URL::to('admin/roles/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop