@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Integrantes</h1>
            </div>

            <div class="col">
                <a class="btn btn-secondary btn-rounded" href="{{route('integrant.create')}}" >Nuevo Integrante</a>
            </div>
        <table class="table table-hover">
            <thead>
              <tr>

                <th scope="col">Nombre</th>
                <th scope="col"></th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($integrants as $integrant)
                <tr>
                    <th>{{$integrant->name}}</th>
                    <th> <img height="120" src="{{'images/categories' .$integrant->url_photo}}" alt="img"></th>
                    <th> <form action="{{ route('integrant.destroy', $integrant->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('integrant.show', $integrant->id)}}" class="btn btn-secondary ">Ver</a>
                        <a href="{{route('integrant.edit', $integrant->id)}}" class="btn btn-primary ">Editar</a>

                        <button class="btn btn-danger" type="submit">Eliminar</button>
                      </form></th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
