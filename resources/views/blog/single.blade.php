@extends('main')

@section('title', "| $post->title")

@section('content')

<style>
	hr{
		border-color: black;
	}
</style>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<hr>
			
			<h1>{{ $post -> title }}</h1>

			<hr>

			<p>{{ $post -> body }}</p>

			<hr>

		</div>
	</div>

@stop