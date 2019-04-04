		<footer class="footer-distributed">

		@if(Session::has('feedback_message'))
			<!-- Modal -->
                    <div class="modal fade " id="feedback_modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p class="alert alert-success"> {!! session('feedback_message') !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default _my" data-dismiss="modal" >Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


		@endif

			<div class="footer-left">

				<h3>NearBy<span> Buy & Sell</span></h3>

				<p class="footer-links">
					<a href="/">Home</a>
					·
					<a href="/buy">Buy</a>
					·
					<a href="/sell">Sell</a>
					·
					<a href="/about">About</a>
					·
					<a href="/terms">Terms of use</a>
				</p>

				<p class="footer-company-name">buyondesk.com &copy; 2017</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-whatsapp"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Any Feedback!</p>

				<form action="/feedback" method="post">
					{{csrf_field()}}
					@if(!Auth::check())
						<input type="email" name="email" placeholder="Email" required/>
					@endif()
					<textarea name="message" placeholder="Help us to improve the platform" required></textarea>
					<button>Send</button>
<!--
					@if(Session::has('feedback_message'))
						<p class="alert alert-success">Your Feedback successfully received </p>
					@endif() -->

				</form>

			</div>

			<script type="text/javascript">
				$('#feedback_modal').modal('show');
			</script>

		</footer>