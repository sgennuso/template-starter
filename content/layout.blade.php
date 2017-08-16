<html lang="{{ $lang }}">
	<head>
		<title>@yield('title', $site->global('site_title') )</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="/assets/main.css">
		<script defer src="{{ $site->asset('vendor/fontawesome/js/packs/solid.js') }}"></script>
		<script defer src="{{ $site->asset('vendor/fontawesome/js/fontawesome.js') }}"></script>
		@yield('head')
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">{{ $site->trans('Toggle navigation') }}</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">{{ $site->global('site_title') }}</a>
				  <button type="button" class="navbar-btn btn btn-primary" data-toggle="modal" data-target="#ctaModal"><i class="fa fa-phone"></i> {{ $site->trans('Call Now') }}</button>
			    </div>

				<!-- Site Languages -->
				@foreach( $site->languages('routes') as $lang => $route )
				<p class="navbar-text navbar-right"><a href="{{ $route }}">{{ strtoupper($lang) }}</a></p>
				@endforeach

				<!-- Menu -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  {!! $site->menu('main', ['attributes' =>
					  ['class' => 'nav navbar-nav navbar-right']
					]) !!}
			    </div><!-- /.navbar-collapse -->

			  </div><!-- /.container-fluid -->
			</nav>
		</header>

		<div class="content">
			@yield('content')
		</div>

		<p class="text-center" style="margin-top:3em;">Copyright &copy; {{ $site->global('site_title') }}</p>

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

		<script src="{{ $site->asset('scripts/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ $site->asset('vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script src="{{ $site->asset('scripts/template.js') }}"></script>
		@yield('foot')
	</body>
</html>
