@extends('layouts.main')
@section('content')

<div class="container">

    <div class="btn-group">
        <a href="{{route('investigation.index')}}" class="btn btn-dark">Investigación</a>
        <a href="{{route('articulos')}}" class="btn btn-dark">Articulos</a>
        <a href="{{route('proyectos')}}" class="btn btn-dark active">Proyectos</a>
    </div>


    <div class="row mt-5">
        <div class="col">
            <h3 class="h4 text-uppercase font-weight-bold">Proyectos activos</h3>

            @foreach ($activeProjects as $item)
            <ul>
                <li>{!! $item->name !!}</li>
              </ul>
            @endforeach
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="h4 text-uppercase font-weight-bold">Proyectos ejecutados</h3>

            @foreach ($executedProjects as $item)
            <ul>
                <li>{!! $item->name !!}</li>
              </ul>
            @endforeach
        </div>
    </div>


</div>
@endsection
