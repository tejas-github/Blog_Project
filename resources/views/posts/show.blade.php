@extends ('main')

@section('title','| View Post')

@section('content')

<style>
	hr{
		border-color: black;
	}
</style>


<div class="row">
	<div class="col-md-8">

		<h1>{{$post -> title}}</h1>
		<p class="lead">{{$post -> body}}</p>
	
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal" style="margin-left: -55px" >
				<dt>Url:</dt>
				<dd><a href=" {{ route('blog.single', $post -> slug) }} ">{{ url('blog/'.$post -> slug)}}</a>
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
				{!!Html::linkRoute('posts.edit', 'Edit', array($post -> id), array('class' => 'btn btn-primary btn-block'))!!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(array('route' => ['posts.destroy', $post -> id],'method' => 'DELETE')) !!}

					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					</div>

					{!! Form::close() !!}
			</div>

			<div class="row">
						<div class="col-md-12">
						{!!Html::linkRoute('posts.index', '<<See all posts',[], array('class' => 'btn btn-default btn-h1-spacing btn-block'))!!}
						</div>

		</div>
	</div>
</div>

@endsection