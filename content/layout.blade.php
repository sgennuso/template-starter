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
			@yield('content')
		</div>

		<script src="/vendor/ubiweb/template-starter/scripts/main.js"></script>
		@yield('foot')
	</body>
</html>
