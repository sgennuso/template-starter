@extends('layout')

@section('title', 'About Starter Template')

@section('content')
	@component('hero', ['image' => $site->asset('images/sample-hero.jpg') ])
    <h1>à propos</h1>
	@endcomponent

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@component('contact', ['site' => $site])
			@endcomponent
		</div>
	</div>
@endsection
