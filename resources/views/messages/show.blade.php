@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="bg-white shadow rounded py-3 px-4">
                <div class="form-group">
                    <label for="title">Nombre</label>
                    <p class="bg-ligth shadow-sm">{{$message->name}}</p>
                </div>

                <div class="form-group">
                    <label for="copete">Email</label>
                    <p class="bg-ligth shadow-sm">{{$message->email}}</p>
                </div>


                <div class="form-group">
                    <label for="description">Mensaje</label>
                    <p class="bg-ligth shadow-sm">{{$message->message}}</p>
                </div>


                <a href={{route('message.index')}} class="btn btn-outline-primary btn-lg btn-rounded">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
