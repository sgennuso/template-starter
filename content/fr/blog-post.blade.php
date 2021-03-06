@extends('layout')

@section('title', 'Ubiweb Blog')

@section('content')
	@component('hero', ['image' => $site->asset('images/sample-hero.jpg') ])
    <h1>Blogue: {{ $site->blog()->post()->title }}</h1>
	@endcomponent

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="blog">
				{!! $site->blog()->post()->content !!}
			</div>
		</div>
	</div>
@endsection
