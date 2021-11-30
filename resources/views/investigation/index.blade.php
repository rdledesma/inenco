@extends('layouts.main')
@section('content')

<div class="container">

    <div class="btn-group">
        <a href="{{route('investigation.index')}}" class="btn btn-dark active">Investigación</a>
        <a href="{{route('articulos')}}" class="btn btn-dark">Articulos</a>
        <a href="{{route('proyectos')}}" class="btn btn-dark">Proyectos</a>
      </div>


    {!! $cover->content!!}

</div>
@endsection
