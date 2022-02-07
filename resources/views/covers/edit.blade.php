@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Portada - {{$cover->pagina}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form class="bg-white shadow rounded py-3 px-4"
            action="{{route('cover.update', $cover->id)}}"
            method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf



                <div class="form-group">
                    <label for="title">Contenido:</label>

                    <textarea class="ckeditor form-control bg-ligth shadow-sm @if($errors->first('content')) is-invalid @else border-0 @endif"
                        id="content"
                        type="name"
                        name="content">{{ $cover->content }}
                    </textarea>
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $errors->first('content', ':message') }} </strong>
                    </span>
                </div>



                <button type="submit" class="btn btn-primary btn-lg btn-rounded">Guardar</button>
                <a href={{route('cover.index')}} class="btn btn-outline-primary btn-lg btn-rounded">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection

