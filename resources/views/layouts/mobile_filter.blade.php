

		<div class="panel panel-success" >
		  <div class="panel-body" style="overflow: visible;">
		  <div class="col-xs-6">
			<div class="dropdown" >
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 100%; height: 30px;">
			    <span class="pull-left">Filter</span>
			    <span class="caret pull-right"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="/buy/college">Matched College</a></li>
				<li><a href="/buy/university">Matched University</a></li>
				<li><a href="/buy">Both Mached College and Matched University</a></li>
				<li><a href="/buy/all">All Items</a></li>
			  </ul>
			</div>
		  </div>
		  <div class="col-xs-6">
			<form action="/buy/category" method="POST">
				{{csrf_field()}}
				<select style="width: 100%; height: 30px;" id="degree_name_for_mobile_view" name="degree_name" onchange="this.form.submit()">
					@foreach($categories as $category)
						<option></option>
						<option value="{{$category['degree_key']}}">{{$category['degree_name']}}</option>
					@endforeach()
				</select>
			</form>
		  </div>
		  </div>
		</div>