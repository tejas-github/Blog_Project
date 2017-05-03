@extends('main')

@section('title','| About')

@section('content')

<style>
	hr{
		border-color: black;
	}
</style>


 <div class="row">

	<div class="col-md-12">

	  <h1>About Me</h1>


			@foreach ($data as $key => $element)
				
				<?php 

				if($key == "fullname")

				{ echo "My Name is " .$element;}
				 
				 else
				 
				 	{echo "<br><br>My Email ID is ".$element;}
				?>
				
				
			@endforeach


	  <hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aspernatur quas quibusdam veniam sunt animi, est quos optio explicabo deleniti inventore unde minus, tempore enim ratione praesentium, cumque, dolores nesciunt?</p>

	</div>

  </div>

@endsection