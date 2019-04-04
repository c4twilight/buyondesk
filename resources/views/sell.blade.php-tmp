@extends('layouts/master')

@section('additionalCSS')
	<link rel="stylesheet" type="text/css" href="css/sell.css">
@endsection()

@section('contents')
		@if(Session::has('sell_message'))
			<!-- Modal -->
            <div class="modal fade " id="sell_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="alert alert-success"> {!! session('sell_message') !!}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default _my" data-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>
		@endif
	<div class="row sell_main">
		<div class="container-fluid">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<form class="form-horizontal" method="POST" action="/sell" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label class="control-label col-sm-3" for="price">Amount  <span class="label label-default"> ₹</span> :</label>
						<div class="col-sm-2">
							<input type="number" name="price" class="form-control" id="price" placeholder="₹" min="0"   required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="title">Title:</label>
						<div class="col-sm-9">
							<input type="text" name="title" id="title" class="form-control" placeholder="Entre Title" required>
						</div>
					</div>
					<div class="form-group">
						<label for="discription" class="control-label col-sm-3">Description:</label>
						<div class="col-sm-9">
							<textarea name="discription" id="discription" class="form-control" placeholder="Please Provide some Discription" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Condition:</label>
						<div class="col-sm-3">
							<select name="condition"  class="form-control">
								<option value="old">Old</option>
								<option value="new">New</option>
								<option value="good">Good</option>
								<option value="fine">Fine</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Type:</label>
						<div class="col-sm-9">
							<label class="radio-inline"><input type="radio" name="type" id="book" value="book">Book</label>
							<label class="radio-inline"><input type="radio" name="type" id="other" value="other">Other</label>
						</div>
					</div>
					<div class="form-group" style="display: none" id="author">
						<label class="control-label col-sm-3">Author</label>
						<div class="col-sm-9">
							<input type="text" name="author" placeholder="Author's Name" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Category:</label>
						<div class="col-sm-9">
							<select style="width: 100%;" id="degree_name" name="degree_name">
								@foreach($categories as $category)
									<option value="{{$category['degree_key']}}">{{$category['degree_name']}}</option>
								@endforeach()
								<!-- @include('layouts/degree_name') -->
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Choose Image:  <span class="label label-default">max: 2</span></label>
						<div class="col-sm-9">
							<label class="btn btn-default btn-file">
							    <strong>Browse</strong> (Image 1) <input name="image_1" type="file" style="display: none;">
							</label>
							<label class="btn btn-default btn-file">
							    <strong>Browse</strong> (Image 2)<input name="image_2" type="file" style="display: none;">
							</label>
						</div>
					</div>
					<div class="form-group col-sm-12 pull-right" clearfix>
						<input type="submit" name="submit" class="btn btn-success btn-lg pull-right submit" value="submit">
					</div>
						@include('layouts/errors')
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('#sell_modal').modal('show');
	</script>
@endsection()

