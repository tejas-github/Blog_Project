@extends('main')

@section('title','| Homepage')

@section('content')

<style>
  hr{
    border-color: black;
  }
</style>


<div class="row" ">

  <div class="col-md-12" >

    <div class="jumbotron" style="background-color: #F5D2E8; margin-left: -15px; margin-right: -15px">

      <h1>Welcome to My Blog!</h1>

      <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>

      <p><a class="btn btn-info btn-lg" href="#" role="button">Popular Post</a></p>
    
    </div>

   </div>

</div>
<!-- end of header .row -->


<div class="row">

  <div class="col-md-8 well" style="background-color: #F5D2E8;">

    @foreach($posts as $post)

    <div class="post" >

      <h3>{{ $post -> title }}</h3>

      <p>{{substr($post -> body,0,120) }}{{strlen($post -> body) >120 ? "...": ""}}</p>

     <!-- METHOD - 1 <a href="url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a> -->

     <!-- METHOD -2 <a href="  route('blog.single', $post -> slug) }} "> Read More </a> -->

     {!!Html::linkRoute('blog.single', 'Read More', array($post -> slug), array('class' => 'btn btn-info'))!!}

    </div>
    
    <hr>
  
    @endforeach

  </div>

  <div class="col-md-3 col-md-offset-1 well" style="background-color: #F5D2E8; padding-bottom:68px; padding-top: 55px">

    <h2 style="text-align: center; margin-bottom: 35px;" class=" inverse-label"> Sidebar </h2>
    <hr>

    @foreach($sidebar as $s_data)

    <a href=" {{ route('blog.single', $s_data -> slug) }} " class="btn btn-block" style="text-align: center; color: blue;">{{ $s_data -> title }}</a>
    <hr>

    @endforeach

  </div>

</div>

@endsection