@extends('main')

@section('title','| All Posts')

@section('content')

<style>
	hr {
		border-color: black;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<h1 align="center">All Posts</h1>
		<hr >
	</div>
</div><!-- End of row -->
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<th>#</th>
				<th style="text-align: center;">Title</th>
				<th style="text-align: center;">Body</th>
				<th style="text-align: center;">Created At</th>
				<th>*</th>
			</thead>

			<tbody>
				@foreach($posts as $post)
				
					<tr>
						<th>{{$post -> id}}</th>
						<td style="text-align: center;">{{$post -> title}}</td>
						<td>{{substr($post -> body,0,50) }}{{strlen($post -> body) >50 ? "...": ""}}</td>
						<td style="text-align: center;">{{date('d-M-Y h:i A', strtotime($post -> created_at))}}</td>
						<td style="text-align: center;"><a href="{{ route('posts.show', $post -> id) }}" class="btn btn-default btn-sm" target="_blank">View</a><a href="{{ route('posts.edit', $post -> id) }}" class="btn btn-default btn-sm" target="_blank">Edit</a></td>
					</tr>

				@endforeach
			</tbody>
		</table>	
		<div class="text-center">
			{!! $posts -> links(); !!}
		</div>
	</div>
</div>
@stop