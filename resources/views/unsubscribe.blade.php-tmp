@extends('layouts.master')

@section('contents')
	<div class="container">
	<form class="form" action="/unsubscribe" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="email" class="control-label">Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
		</div>
		<div class="form-group">
			<input type="submit" name="button" class="btn btn-danger" value="Submit">
		</div>
	</form>
	</div>
@endsection()