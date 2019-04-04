@if(!auth()->check())
	<!-- login modal -->
	<div class="modal fade" id="login" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span>
						<h2>Login</h2> &nbsp&nbsp&nbsp or &nbsp&nbsp&nbsp
						<h1><button class="btn btn-default" data-toggle="modal" data-target="#signup" data-dismiss="modal">Signup</button></h1>
						<button class="glyphicon glyphicon-remove pull-right btn btn-default remove" data-dismiss="modal"></button>
					</span>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="/login">
						{{csrf_field()}}
						<div class="form-group">
							<label class="col-sm-3 control-label" for="email">Email:</label>
							<div class="col-sm-9">
								<input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="password">Password:</label>
							<div class="col-sm-9">
								<input type="Password" name="password" id="password" placeholder="Enter Your Password" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9">
								<button type="submit" class="btn btn-success pull-right ">SUBMIT</button>
							</div>
						</div>
					</form>
					@if(count($errors))
						<div class="form-group">
							@foreach($errors->all() as $error)
								@if($error == 'Invalid Login ID Or Password')
									<script type="text/javascript">
											$('#login').modal('show');
									</script>
									<div class="alert alert-danger">
										{{$error}}
									</div>
								@endif
							@endforeach
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>


	<!-- signup modal -->
	<div class="modal fade" id="signup" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span>
						<h2>SignUp</h2> &nbsp&nbsp&nbsp or &nbsp&nbsp&nbsp
						<h1><button class="btn btn-default" data-toggle="modal" data-target="#login" data-dismiss="modal">Login</button></h1>
						<button class="glyphicon glyphicon-remove pull-right btn btn-default remove" data-dismiss="modal"></button>
					</span>
				</div>
				<div class="modal-body">
					<form class="form-horizontal"  method="POST" action="/signup">
						{{csrf_field()}}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="name">Name:</label>
							<div class="col-sm-9">
								<input type="Text" name="name" id="name" placeholder="Enter Your Name" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="email">Email:</label>
							<div class="col-sm-9">
								<input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="university_name">University Name:</label>
							<div class="col-sm-9">
								<select class="form-control" id="university_name" style="width: 100%;" name="university_name">
									<option></option>
									@include('layouts/university_names');
								</select>
							</div>
						</div>

						<!--  -->
						<div class="form-group" style="display: none;" id="college_name_id">
							<label class="col-sm-3 control-label" for="college_name">College Name:</label>
							<div class="col-sm-9">
								<select class="form-control" id="college_name" style="width: 100%;" name="college_name" required>
									<option></option>
								</select>
							</div>
						</div>
						<!--  -->
						<div class="form-group">
							<label class="col-sm-3 control-label" for="Password">Password:</label>
							<div class="col-sm-9">
								<input type="Password" name="password" id="Password" placeholder="Enter Your Password" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="password_confirmation">Confirm Password:</label>
							<div class="col-sm-9">
								<input type="Password" name="password_confirmation" id="password_confirmation" placeholder="Renter Your Password" class="form-control" required>
							</div>
						</div>
						<div class="checkbox" style="text-align: left;">
						    <label class="col-sm-offset-2">
						      <input type="checkbox" name="checkbox" required checked> Agree to <a href="/terms">I agree to Terms and Condition</a>
						    </label>
						 </div>
						<div class="form-group">
							<div class="col-sm-9">
								<button type="submit" class="btn btn-success pull-right ">SUBMIT</button>
							</div>
						</div>
						@if(count($errors))
								@foreach($errors->all() as $error)
									@if($error != 'Invalid Login ID Or Password')
										<script type="text/javascript">
											$('#signup').modal('show');
										</script>
										<div class="alert alert-danger">
											{{$error}}
										</div>
									@endif
								@endforeach
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('#signup').on('shown.bs.modal', function () {
		  $('#name').focus()
		})

		$('#login').on('shown.bs.modal', function () {
		  $('#email').focus()
		})
	</script>

@endif()
