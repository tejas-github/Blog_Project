@extends ('main')

@section ('title', '| Login')

@section ('content')

	<!--csrf_field()  !!} If custom form i.e without using Laravel Form helpers then include the above otherwise it will fail [Do it "i think" first thing inside the form tag]-->

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{{-- <div class="well" style="border: 3px solid black; background-color: darkgrey;"> --}}
			<div class="panel" style="background-color: #B76B93">
                <div class="panel-heading" style="text-align: center; font-size: large;">Login</div>
                	<div class="panel-body" style="background-color: #FBE6F1">
						{!! Form::open() !!}
							
							{{-- {{ Form::label('email', 'Email:') }} --}}
							{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Your EmailID', 'style' => 'margin-top:40px; text-align:center;']) }}

							{{-- {{ Form::label('password', 'Password:', ['class' => 'form-spacing-top']) }} --}}
							<div style="text-align: center;"> {{ Form::password('password', ['class' => 'form-control ', 'placeholder' => 'Type Your Password', 'style' => 'margin-top:40px; text-align:center;']) }} </div>
							
							{{ Form::checkbox('remember') }} 
							{{ Form::label('remember', 'Remember Me', ['style' => 'margin-top:40px;']) }}

							<br>
							<div style="text-align: center;">{{ Form::submit('Login', ['class' => 'btn btn-danger btn-lg form-spacing-top', 'style' => 'width:160px']) }}</div>

						{!! Form::close() !!}
					</div>	
				</div>	
			</div>
		</div>
	</div>

@stop