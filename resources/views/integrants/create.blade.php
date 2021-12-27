@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Nuevo Integrante</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form class="bg-white shadow rounded py-3 px-4"
            action="{{route('integrant.store')}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf


                <div id="myContainer" class="container">
                    <div class="wrapper">
                        <div class="image">
                            <img id = "blah" src="" alt="">
                        </div>
                        <div class="content">
                            <div class="icon"><i class="fa fa-cloud-upload" ></i></div>

                        </div>

                        <div class="file-name">Foto de perfil</i></div>
                    </div>
                    <div class="form-group">

                        <input type="file" name="photo" onchange="readURL(this);" class="form-control bg-ligth shadow-sm @if($errors->first('photo')) is-invalid @else border-0 @endif" />
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('photo', ':message') }} </strong>
                        </span>

                    </div>
                </div>




                <div class="form-group">
                    <label for="title">Nombre:</label>
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
                    <label for="title">Titulo:</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('title')) is-invalid @else border-0 @endif"
                    id="title"
                    type="name"
                    name="title"
                    value="{{old('title')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('title', ':message') }} </strong>
                        </span>
                </div>

                <div class="form-group">
                    <label for="title">Descripción:</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('description')) is-invalid @else border-0 @endif"
                    id="description"
                    type="name"
                    name="description"
                    value="{{old('description')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('description', ':message') }} </strong>
                        </span>
                </div>



                <div class="form-group">
                    <label for="title">Email:</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('email')) is-invalid @else border-0 @endif"
                    id="email"
                    type="email"
                    name="email"
                    value="{{old('email')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('email', ':message') }} </strong>
                        </span>
                </div>


                <div class="form-group">
                    <label for="title">CV:</label>
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

@section('scripts')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
