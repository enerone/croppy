@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h1>Registro de usuarios</h1>
			@include('layouts.partials.errors')
			{{ Form::open(['route'=>'register_path']) }}
	        <!-- Username form input -->
	        	<div class="form-group">
	        		{{ Form::label('username','Nombre de usuario:') }}
	        		{{ Form::text('username',null,['class'=>'form-control']) }}
	        	</div>
            <!-- Username form input -->
            <div class="form-group">
                {{ Form::label('gmt','GMT:') }}
                {{ Form::select('user_timezone',$timezones,['class'=>'form-control']) }}
            </div>
	        <!-- Email form input -->
	        	<div class="form-group">
	        		{{ Form::label('email','Email:') }}
	        		{{ Form::text('email',null,['class'=>'form-control']) }}
	        	</div>
	        <!-- Password form input -->
	        	<div class="form-group">
	        		{{ Form::label('password','Clave:') }}
	        		{{ Form::password('password',['class'=>'form-control']) }}
	        	</div>
	        <!-- Password form input -->
	        	<div class="form-group">
	        		{{ Form::label('password_confirmation','Confirmación de clave:') }}
	        		{{ Form::password('password_confirmation',['class'=>'form-control']) }}
	        	</div>
	        	<div class="form-group">
	        		{{ Form::submit('Registrate', ['class'=>'btn btn-primary']) }}
	        	</div>
	        {{ Form::close() }}
	      </div>
	</div>
@stop