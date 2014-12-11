@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Nuevo tipo de cultivo</h1>
        @include('layouts.partials.errors')
        {{ Form::open(['route'=>'tiposcultivoCreate_path','files' => true]) }}
        <!-- Username form input -->
        <div class="form-group">
            {{ Form::label('titulo','Titulo:') }}
            {{ Form::text('titulo',null,['class'=>'form-control']) }}
        </div>
        <!-- Email form input -->
        <div class="form-group">
            {{ Form::label('descripcion','Descripción:') }}
            {{ Form::textarea('descripcion',null,['class'=>'form-control']) }}
        </div>
        <!-- Password form input -->
        <div class="form-group">
            {{ Form::label('imagen','Imagen:') }}
            {{ Form::file('imagen',['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop