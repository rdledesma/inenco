@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Proyectos</h1>
            </div>
        <table class="table table-hover">
            <thead>
              <tr>

                <th scope="col">Título</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $item)
                <tr class="table">
                    <th>{{$item->name}}</th>
                    <th>{{$item->state == 'active' ? 'EN EJECUCIÓN' : 'EJECUTADO' }}</th>
                    <th>

                        <form action="{{ route('project.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('project.show', $item->id)}}" class="btn btn-secondary ">Ver</a>
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                          </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
