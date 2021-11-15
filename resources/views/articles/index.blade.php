@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Artículos</h1>
            </div>

            <div class="col">
                <a class="btn btn-secondary btn-rounded" href="{{route('publication.create')}}" >Nueva Publicación</a>
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
                @foreach ($articless as $item)
                <tr>
                    <th>{{$item->description}}</th>
                    <th>{{$item->created_at->format('d-m-Y') }}</th>
                    <th>
                        <a href="" class="btn btn-primary ">Editar</a>
                        <a href="" class="btn btn-secondary ">Ver</a>
                        <a href="" class="btn btn-danger"> Eliminar</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
