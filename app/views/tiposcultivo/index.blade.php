@extends('layouts.default')

@section('content')
<h1>Tipos de cultivo</h1>
@foreach($tiposdecultivo->chunk(4) as $tcSet)
<div class="row users">
    @foreach($tcSet as $tc)
    <div class="col-md-3 user-block">

        <h4 class="user-block-username">
            {{ link_to_route('tiposcultivo_path', $tc->titulo, $tc->titulo) }}
        </h4>
    </div>
    @endforeach
</div>
@endforeach

@stop