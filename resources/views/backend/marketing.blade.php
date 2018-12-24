@extends('backend.layouts.app')

@section('content')

<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-10">

		<h4>@yield('title',trans('backend.sidebar.marketingmestro'))</h4>

<img src="{{url('public/uploads/dashboard.png')}} " style="height:480px; width: 480px;">
	</div>
</div>

@stop