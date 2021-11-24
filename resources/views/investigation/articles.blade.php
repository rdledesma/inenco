@extends('layouts.main')
@section('content')

<div class="container">

    <div class="btn-group">
        <a href="{{route('investigation.index')}}" class="btn btn-dark">Investigación</a>
        <a href="{{route('articulos')}}" class="btn btn-dark active">Articulos</a>
        <a href="{{route('proyectos')}}" class="btn btn-dark">Proyectos</a>
    </div>


    <div class="row mt-5">
        <div class="col">
            <h3 class="h4 text-uppercase font-weight-bold">Artículos publicados</h3>

            @foreach ($articles as $item)
            <ul>
                <li>
                    {!! $item->description!!} @foreach ($item->files as $item)
                    <a href="{{route('article.file', $item->id)}}">{{$item->file}}</a>
                    @endforeach

                </li>
              </ul>
            @endforeach
        </div>
    </div>




</div>
@endsection
