
	<div class="container-fluid">
		<div class="header">
			<div class="container main_nav">
				<a href="/"><img src="/image/13.png" class="pull-left img-responsive img-circle" height="100px" width="100px" alt="nearby buy and sell" /></a>
				<ul class=" mainNav">
					<li><a href="/">Home</a></li>
					@if(!auth()->check())
						<li><a href="#" data-toggle="modal" data-target="#login">Buy</a></li>
						<li><a href="#" data-toggle="modal" data-target="#login">Sell</a></li>
						<li><a href="#" data-toggle="modal" data-target="#login">Sign in</a></li>
					@else()
						<li><a href="/sell">Sell</a></li>
						<li><a href="/buy">Buy</a></li>
						<li><a href="/user">Account</a></li>
						<li><a href="/logout">Logout</a></li>
					@endif()
					<li><a href="/about">About</a></li>
				</ul>
			</div>
		</div>




		<!--  nav for smaller screen -->
		ˆ<div class="nav_small">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <!-- <a class="navbar-brand" href="#"></a> -->
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					@if(!auth()->check())
						<li><a href="#" data-toggle="modal" data-target="#login">Buy</a></li>
						<li><a href="#" data-toggle="modal" data-target="#login">Sell</a></li>
						<li><a href="#" data-toggle="modal" data-target="#login">Sign in</a></li>
					@else()
						<li><a href="/sell">Sell</a></li>
						<li><a href="/buy">Buy</a></li>
						<li><a href="/user">Account</a></li>
						<li><a href="/logout">Logout</a></li>
					@endif()
					<li><a href="/about">About</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>

