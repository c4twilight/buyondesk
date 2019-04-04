
	@extends('layouts/master')

	@section('additionalCSS')
		<link rel="stylesheet" type="text/css" href="/css/unitBuy.css">
	@endsection

	@section('contents')

		<div class="buy_main">
				<div class="col-md-9 col-sm-9">
					@if(count($userSells)>0)
						@foreach($userSells as $key => $buy)
							<div class="panel">
							<div class="panel-title">
								@if($buy->sold_out)
									<center><span class="label label-danger college_name">sold out</span></center>
								@else
									<center><span class="label label-success college_name">{{$buy->SellerCollegeName($buy)}}</span></center>
								@endif
							</div>
							@if($buy->sold_out)
							<div class="panel-body" style="filter: blur(2px);">
							@else
							<div class="panel-body">
							@endif
								<div class="col-md-2 col-sm-2 col-xs-12">
										<ul class="wrapper_side_image col-sm-12 col-xs-12">
											<div class="side_image col-md-12 col-xs-2 col-sm-6">
												<img src="/storage/image/{{$buy->image_1}}" width="50px" height="50px">
											</div>
											<div class="side_image col-md-12 col-xs-2 col-sm-6">
												<img src="/storage/image/{{($buy->image_2)?$buy->image_2:$buy->image_1}}" alt="" width="50px" height="50px"  >
											</div>
										</ul>
									</div>
									<div class="col-md-4 col-sm-4">
									    <a href="#" class="choose_image">
									      <img src="/storage/image/{{$buy->image_1}}" class="img-responsive" >
									    </a>
									    <center>
									    <div class="caption" >
									    	<h3><span class="label label-success">₹: {{$buy->price}}</span></h3>
									    	<h4><span class="label label-success" style="overflow:scroll;">{{$buy->SellerUniversityName($buy)}}</span></h4>
									    </div>
									    </center>
									</div>
									<div class="col-md-6 col-sm-6 containts">
										<ul class="list-inline">
											<li><strong>Title:</strong></li>
											<li>{{$buy->title}}</li>
										</ul>
										<ul class="list-inline">
											<li><strong>Condition</strong></li>
											<li>{{$buy->condition}}</li>
										</ul>
										<ul class="list-inline">
											<li><strong>For</strong></li>
											<li>{{$buy->degree_name}}</li>
										</ul>
										@if($author = $buy->author)
											<ul class="list-inline">
											  <li><strong>Author:</strong></li>
											  <li>{{$author}}</li>
											</ul>
										@endif()
										<ul class="list-inline">
											<li><strong>Description:</strong></li>
											<li>{{$buy->discription}}</li>
										</ul>
									</div>
									<button class="btn btn-success col-xs-12"  data-toggle="modal" data-target="#sold_out">SOLD OUT</button>
								</div>
							</div>
						@endforeach()
					@else
						<center><h2>No Items Yet</h2></center>
					@endif()
					<center>{{$userSells->links()}}</center>
				</div>
				<div class="col-md-3 col-sm-12 filters">
					@include('layouts.filter')
				</div>
		</div>
	<div class="modal fade" id="sold_out">

		<script type="text/javascript">
			// $('.media img').click(function(){
			// 	$('.thumbnail img').attr('src',$(this).attr("src"));
			// 	$('.thumbnail').attr('href',$(this).attr("src"));
			// });

			$('.side_image img').click(function(){
				$('.choose_image img').attr('src',$(this).attr("src"));
			});
		</script>

		<style type="text/css">
			.panel{
				/* border: 2px solid green; */
				border-radius: 10px;
				margin-bottom: 15px;
			}
		</style>
	@endsection