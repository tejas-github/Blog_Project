@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

<style>
	hr{
		border-color: black;
	}
</style>

<div class="row">

	{!! Form::model($post, ['route' => ['posts.update', $post -> id], 'method' => 'PUT']) !!}
	
	<div class="col-md-8">
		
		{{Form::label('title','Title:')}}
		
		{{Form::text('title', null, ['class' => 'form-control input-lg'])}}

		{{Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])}}

		{{Form::text('slug', null, ['class' => 'form-control'])}}

		{{Form::label('body','Body:',['class' => 'form-spacing-top'])}}
		
		{{Form::textarea('body', null, ["class" => 'form-control'])}}
	</div>

	<div class="col-md-4">
		<div class="well">
			
			<dl class="dl-horizontal" style="margin-left: -55px" >
				
				<dt>Url:</dt>
				
				<dd><a href="{{url('blog/'.$post -> slug)}}">{{url('blog/'.$post -> slug)}}</a>
				</dd>
			</dl>

			<dl class="dl-horizontal" style="margin-left: -55px" >
				
				<dt>Created At:</dt>
				
				<dd>{{date('d-M-Y &\nb\sp; h:i:s A',strtotime($post -> created_at))}}
				</dd>
			</dl>
			<br>
			<dl class="dl-horizontal" style="margin-left: -52px">
				
				<dt>Updated At:</dt>
				
				<dd>{{date('d-M-Y &\nb\sp; h:i:s A',strtotime($post -> updated_at))}}
				</dd>
			</dl>
			<hr>

			<div class="row">
				<div class="col-sm-6">
				
				{!!Html::linkRoute('posts.show', 'Cancel', array($post -> id), array('class' => 'btn btn-danger btn-block'))!!}
				
				</div>
				<div class="col-sm-6">
				
					{{ Form::submit('Save', ['class' => 'btn btn-success btn-block'])}}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
</div> <!-- end of .row(form) -->

@stop