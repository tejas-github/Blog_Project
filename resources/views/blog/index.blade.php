@extends('main')

@section('title', '|Blog')

@section('content')

<style>
	hr{
		border-color: black;
	}
</style>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
			<hr />
		</div>
	</div>

	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{$post -> title}}</h2>
			
			<h5>Published: {{date('d-M-Y &\nb\sp; h:i:s A',strtotime($post -> created_at))}}</h5>
			
			<p>{{strlen($post -> body) >160 ? substr($post->body, 0,160) . "...": "$post->body"}}</p>
			
			<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary"> Read More </a>
			<hr />
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts -> links() !!}
			</div>
		</div>
	</div>

@stop