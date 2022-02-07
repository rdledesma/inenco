@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Nuevo recurso</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form class="bg-white shadow rounded py-3 px-4"
            action="{{route('resource.store')}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf







                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('name')) is-invalid @else border-0 @endif"
                    id="name"
                    type="name"
                    name="name"
                    value="{{old('name')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('name', ':message') }} </strong>
                        </span>
                </div>

                <div class="form-group">
                    <label for="copete">Archivo</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('file')) is-invalid @else border-0 @endif"
                    id="file"
                    type="file"
                    name="file"
                    value="{{old('file')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('file', ':message') }} </strong>
                        </span>
                </div>






                <button type="submit" class="btn btn-primary btn-lg btn-rounded">Guardar</button>
                <a href={{route('integrant.index')}} class="btn btn-outline-primary btn-lg btn-rounded">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection

