<html lang="{{ $lang }}">
	<head>
		<title>@yield('title', $site->global('site_title') )</title>
		<link rel="stylesheet" href="/assets/main.css">
		@yield('head')
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">{{ $site->global('site_title') }}</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
				@foreach( $site->languages('routes') as $lang => $route )
				<p class="navbar-text navbar-right"><a href="{{ $route }}">{{ $lang }}</a></p>
				@endforeach
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  {!! $site->menu('main', ['attributes' =>
					  ['class' => 'nav navbar-nav navbar-right']
					]) !!}
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>
		<div class="container">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ctaModal">Call Now</button>
			@yield('content')
		</div>

		<div class="modal fade" id="ctaModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Modal title</h4>
		      </div>
		      <div class="modal-body">
		        <p>One fine body&hellip;</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<script src="/vendor/ubiweb/template-starter/assets/scripts/jquery-3.2.1.min.js"></script>
		<script src="/vendor/ubiweb/template-starter/assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
		<script src="/vendor/ubiweb/template-starter/assets/scripts/template.js"></script>
		@yield('foot')
	</body>
</html>
