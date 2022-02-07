@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Publicaciones</h1>
            </div>

            <div class="col">
                <a class="btn btn-secondary btn-rounded" href="{{route('publication.create')}}" >Nueva Publicación</a>
            </div>
        <table class="table table-hover">
            <thead>
              <tr>

                <th scope="col">Título</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($publications as $publication)
                <tr>
                    <th>{{$publication->title}}</th>
                    <th>{{$publication->created_at->format('d-m-Y') }}</th>
                    <th>
                        <a href="{{ route('publication.edit', $publication->id)}}" class="btn btn-primary ">Editar</a>
                        <a href="{{route('publication.show', $publication->id)}}" class="btn btn-secondary ">Ver</a>
                        <a href="{{route('publication.destroy', $publication->id)}}" class="btn btn-danger"> Eliminar</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
