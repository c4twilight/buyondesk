<center><h3>Matched College</h3></center>
	@foreach($sells_with_CN as $keys => $values)
		@foreach($values as $key => $value)
			<div class="panel" onclick='window.location.href = "/buy/" + {{$value["id"]}} '>
			<div class="panel-title">
				@if($value->sold_out)
					<center><span class="label label-danger college_name">sold out</span></center>
				@else
					<center><span class="label label-success college_name">{{auth()->user()->getCollegeName($value['user_id'])}}</span></center>
				@endif
			</div>
			@if($value->sold_out)
			<div class="panel-body" style="filter: blur(2px);">
			@else
			<div class="panel-body">
			@endif
				<div class="col-md-3 col-sm-3 pull-left">
				    <a href="#" class="choose_image">
				      <img  alt=""  src="/storage/image/{{$value['image_1']}}">
				    </a>
				    <div class="caption">
				    	<center><h4><span class="label label-success">₹: {{$value['price']}}</span></h4></center>
				    </div>
				</div>
				<div class="containts col-md-9 col-sm-9 col-xm-9 pull-left">
					<div>
						<dl class="dl-horizontal">
						  <dt>Title:</dt>
						  <dd>{{$value['title']}}</dd>
						</dl>
						@if($author = $value['author'])
							<dl class="dl-horizontal">
							  <dt>Author:</dt>
							  <dd>{{$author}}</dd>
							</dl>
						@endif()
						<dl class="dl-horizontal hidden-xs hidden-sm">
						  <dt>Discription:</dt>
						  <dd>{{substr($value['discription'],0,random_int(100,200))}}<span style="color: blue; text-decoration: underline;">...(more)</span></dd>
						</dl>
						<dl class="dl-horizontal visible-xs visible-sm">
						  <dt>For:</dt>
						  <dd>{{$value['degree_name']}}</dd>
						</dl>
						<dl class="dl-horizontal visible-xs visible-sm">
						  <dt>Condition:</dt>
						  <dd>{{$value['condition']}}</dd>
						</dl>
					</div>
				</div>
			</div>
			</div>
		@endforeach()
	@endforeach()

