@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Portadas</h1>
            </div>
        <table class="table table-hover">
            <thead>
              <tr>

                <th scope="col">Artículo</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($covers as $item)
                <tr>
                    <th>{!!$item->pagina!!}</th>
                    <th>
                        <a href="{{route('cover.edit', $item->id)}}" class="btn btn-primary ">Editar</a>
                        <a href="{{route('cover.show', $item->id)}}" class="btn btn-secondary ">Ver</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
