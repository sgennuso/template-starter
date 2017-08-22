@extends('layout')

@section('title', '404 - Not Found')

@section('content')
	@component('hero', ['image' => $site->asset('images/sample-hero.jpg') ])
    <h1>404</h1>
	@endcomponent

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>Could not find the page you were looking for.</p>
		</div>
	</div>
@endsection
