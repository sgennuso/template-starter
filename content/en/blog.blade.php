@extends('layout')

@section('title', 'Ubiweb Blog')

@section('content')
	@component('hero', ['image' => $site->asset('images/sample-hero.jpg') ])
    <h1>Blog</h1>
	@endcomponent

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach( $site->blog('en')->index() as $post )
			<article class="blog">
				<h1><a href="{{ $site->blog()->postUrl($post->slug) }}">{{ $post->title }}</a></h1>
				<div>
					{!! $post->content !!}
				</div>
			</article>
			@endforeach
		</div>
	</div>
@endsection
