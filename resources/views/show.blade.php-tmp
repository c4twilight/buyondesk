
	@extends('layouts/master')

	@section('additionalCSS')
		<link rel="stylesheet" type="text/css" href="/css/unitBuy.css">
	@endsection

	@section('contents')

		@if(Session::has('flash_message'))
			<!-- Modal -->
                    <div class="modal fade " id="msg_modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p class="alert alert-success"> {!! session('flash_message') !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default _my" data-dismiss="modal" >Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


		@endif

		<div class="buy_main">
				<div class="col-xm-12 visible-xs mobile_filters">
					@include('layouts.mobile_filter')
				</div>
				<div class="col-md-9 col-sm-9">
					<div class="panel">
						<div class="panel-title">
							<center><span class="label label-success college_name">{{$buy->SellerCollegeName($buy)}}</span></center>
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
								    <a href="/storage/image/{{$buy->image_1}}" class="choose_image">
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
								<button class="btn btn-success col-xs-12" id="btn_interested" data-toggle="modal" data-target="#interested">INTERESTED</button>
							</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-3 hidden-xs filters">
					@include('layouts.filter')
				</div>
		</div>

	<div class="modal fade" id="interested" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span>
						<h4 class="tooltip-test pull-left" title="This information is use by your Seller to contact you">Please Provide Your Contact Information</h4>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
					</span>
				</div>
				<div class="modal-body">
					<form class="form-inline" method="POST" action="/buy/{{$buy->id}}/contact">
						{{csrf_field()}}
						<div class="form-group">
							<label class="control-label" for="contact_no">Whatsapp No. or Contact No.:</label>
							<input type="tel" name="contact_no" id="contact_no" class="form-control" placeholder="Your Contact Number" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">SUBMIT &nbsp</button>
						</div>
					</form>
					@if(count($errors))
						<div class="form-group">
							@foreach($errors->all() as $error)
								@if(($error == 'provide your contact number') || ($error == 'Invalide contact number'))
									<script type="text/javascript">
											$('#interested').modal('show');
									</script>
									<div class="alert alert-danger" style="margin-top: 10px;">
										{{$error}}
									</div>
								@endif
							@endforeach
						</div>
					@endif
				</div>
			<div class="modal-footer">
				<center><button class="btn btn-success message_button" role="button" type="button">or Just Send a Message</button></center>
				<div class="modal-body message_text" style="display: none;">
					<form class="form-horizontal" method="POST" action="/buy/{{$buy->id}}/message">
						{{csrf_field()}}
						<div class="form-group">
							<textarea name="message" class="form-control" placeholder="Please provide your message here (max characters: 500)" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-success form-control">
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>


	<style type="text/css">


		@media (max-width: 534px){
			#interested .modal-header h4{
				font-size: 0.9em;
			}
		}
	</style>

		<script type="text/javascript">
			$('.side_image img').click(function(){
				$('.choose_image img').attr('src',$(this).attr("src"));
				$('.choose_image').attr('href',$(this).attr("src"));
			});

			$('.message_button').click(function(){
				$('.message_text').show();
			});

			$('#msg_modal').modal('show');

		</script>
	@endsection