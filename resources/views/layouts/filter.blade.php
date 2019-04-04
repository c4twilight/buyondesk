					<h3>Filters:</h3><hr>
					<ul class="list-group">
						<li class="list-group-item"><a href="/buy/college">Matched College</a></li>
						<li class="list-group-item"><a href="/buy/university">Matched University</a></li>
						<li class="list-group-item"><a href="/buy">Both Mached College and Matched University</a></li>
						<li class="list-group-item"><a href="/buy/all">All Items</a></li>
						<!-- <li class="list-group-item"><a href="/buy/state">Matched State</a></li> -->
					</ul>
					<hr>
					<h4>Category:</h4>
					<form action="/buy/category" method="POST">
						{{csrf_field()}}
						<select style="width: 100%;" id="degree_name" name="degree_name" onchange="this.form.submit()">
							@foreach($categories as $category)
								<option></option>
								<option value="{{$category['degree_key']}}">{{$category['degree_name']}}</option>
							@endforeach()
						</select>
					</form>
