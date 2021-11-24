@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Nuevo artículo</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form class="bg-white shadow rounded py-3 px-4"
            action="{{route('article.store')}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf


                <div class="form-group">
                    <label for="title">Artículo:</label>

                    <textarea class="ckeditor form-control bg-ligth shadow-sm @if($errors->first('description')) is-invalid @else border-0 @endif"
                        id="description"
                        type="name"
                        name="description"
                        value="{{old('description')}}">
                    </textarea>
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $errors->first('description', ':message') }} </strong>
                    </span>
                </div>


                <div id="myContainer" class="container">
                    <div class="form-group">

                        <input type="file" name="files[]"  class="form-control bg-ligth shadow-sm @if($errors->first('image_1')) is-invalid @else border-0 @endif" multiple/>
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('image_3', ':message') }} </strong>
                        </span>

                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-rounded">Guardar</button>
                <a href={{route('integrant.index')}} class="btn btn-outline-primary btn-lg btn-rounded">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection

