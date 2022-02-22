@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Recursos</h1>
            </div>

            <div class="col">
                <a class="btn btn-secondary btn-rounded" href="{{route('resource.create')}}" >Nuevo Recurso</a>
            </div>
        <table class="table table-hover">
            <thead>
              <tr>

                <th scope="col">Artículo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($resources as $item)
                <tr>
                    <th>{{$item->name}}</th>
                    <th>{{ date('d-m-Y', strtotime($item->date))}}</th>

                    <th>
                        <a href="" class="btn btn-primary ">Cambiar</a>
                        <a href="{{route('resource.show', $item->id)}}" class="btn btn-secondary ">Descargar</a>
                        <a href="" class="btn btn-danger"> Eliminar</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
