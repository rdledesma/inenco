@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col">
                <h1>Mensajes</h1>
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
                @foreach ($messages as $message)
                <tr class="{{ $message->opened ? 'table' : 'table-dark'  }}">
                    <th>{{$message->name}}</th>
                    <th>{{$message->created_at->format('d-m-Y') }}</th>
                    <th>

                        <form action="{{ route('message.destroy', $message->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('message.show', $message->id)}}" class="btn btn-secondary ">Ver</a>
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
