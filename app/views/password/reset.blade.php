@extends('layouts.default')

@section('content')



<div class="row">
    <div class="col-md-6">
        <h1>Reset your Password </h1>

            {{ Form::open() }}
                {{ Form::hidden('token',$token) }}

            <!--Email form input -->
            <div class="form-group">
                {{ Form::label('email','Email:') }}
                {{ Form::email('email',null,['class'=>'form-control', 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password','Password:') }}
                {{ Form::password('password',['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password_confirmation','Password:') }}
                {{ Form::password('password_confirmation',['class'=>'form-control', 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Submit', ['class'=> 'btn btn-primary form-control']) }}
            </div>
            {{ Form::close() }}

        </div>
    </div>
@stop