					<center><h3>Matched State</h3></center>
					@foreach($sells_with_SN as $keys => $values)
						@foreach($values as $key => $value)
							<div class="panel" onclick='window.location.href = "/buy/" + {{$value["id"]}} '>
							<div class="panel-title">
								<center><span class="label label-success college_name">{{auth()->user()->getStateName($value['user_id'])}}</span></center>
							</div>
							<div class="panel-body">
								<div class="col-md-3 col-sm-3 pull-left">
								    <a href="#" class="thumbnail choose_image">
								      <img  alt=""  src="/storage/image/{{$value['image_1']}}" >
								    </a>
								    <div class="caption">
								    	<h3><span class="label label-success">₹: {{$value['price']}}</span></h3>
								    </div>
								</div>
								<div class="col-md-9 col-sm-9 pull-left">
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
									<dl class="dl-horizontal">
									  <dt>Discription:</dt>
									  <dd>{{substr($value['discription'],0,random_int(100,200))}}<span style="color: blue; text-decoration: underline;">...(more)</span></dd>
									</dl>
								</div>
							</div>
							</div>
						@endforeach()
					@endforeach()