

	@extends('layouts/master')

	@section('additionalCSS')
		<link rel="stylesheet" type="text/css" href="/css/buy.css">
	@endsection

	@section('contents')

		<div class="buy_main">
				<div class="col-md-3 visible-xs mobile_filters">
					@include('layouts.mobile_filter')
				</div>
				<div class="col-md-9 col-sm-9 lists">
					@include('layouts/all_sells')
					<hr>
				</div>
				<div class="col-md-3 col-sm-3 hidden-xs filters">
					@include('layouts.filter')
				</div>
		</div>


	@endsection