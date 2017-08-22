@extends('layout')

@section('title', 'Ubiweb Blog')

@section('content')
	@component('hero', ['image' => $site->blog()->post()->featured_image ])
    <h1>Blog: {{ $site->blog()->post()->title }}</h1>
	@endcomponent

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="blog">
				{!! $site->blog()->post()->content !!}
			</div>
		</div>
	</div>
@endsection
