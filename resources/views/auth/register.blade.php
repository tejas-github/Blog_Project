@extends('main')

@section('title', '| Register')

@section('content')
<style>
	Form{
	font-family:Tahoma; 
}
</style>


<div class="row">
	<div class="col-md-4 col-md-offset-4" >
	<div class="panel panel-primary" style="background-color: lightblue;">
		<div class="panel-heading" style="text-align: center; font-size:large; ">Register</div>
			<div class="panel-body">
				{!! Form::open() !!}

					{{ Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Enter Your Name...', 'style' => 'margin-top:30px;']) }}

					{{ Form::email('email', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'example@xyz.com']) }}

					{{-- {{ Form::text('date of birth', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Enter Your Birth Date: YYYY-MM-DD'])}} --}}

					{{-- {{ Form::text('contact_no', null, ['placeholder' => 'Your Mobile No.', 'class' => 'form-control form-spacing-top']) }} --}}

					{{ Form::password('password', ['class' => 'form-control form-spacing-top
					', 'placeholder' => 'Set Your Password']) }}

					{{ Form::password('password_confirmation', ['class' => 'form-control form-spacing-top', 'placeholder' => 'Retype/Confirm Your Password'])}}

					{{-- <div class="form-spacing-top">{{ Form::radio('gender', 'male',null, ['class' => 'radio-inline', 'style' => 'margin-left:60px;'] ) }} Male --}}
					{{-- {{ Form::radio('gender', 'female',null, ['class' => 'form-spacing-top ', 'style' => 'margin-left:60px;']) }} Female --}}
					<!--</div>-->

					{{ Form::submit('Register', ['class' => 'btn btn-info form-control form-spacing-top', 'style' => 'font-size:medium;font-weight:bold;']) }}

				{!! Form::close() !!}	
			</div>
		</div>
	</div>
</div>

@stop