@extends('layout')

@section('title', '404 - Not Found')

@section('content')
	@component('hero', ['image' => $site->asset('images/sample-hero.jpg') ])
    <h1>404</h1>
	@endcomponent

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>Page n'existe pas.</p>
		</div>
	</div>
@endsection
