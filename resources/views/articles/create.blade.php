@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Nueva artículo</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form class="bg-white shadow rounded py-3 px-4"
            action="{{route('publication.store')}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf







                <div class="form-group">
                    <label for="title">Título:</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('title')) is-invalid @else border-0 @endif"
                    id="title"
                    type="name"
                    name="title"
                    value="{{old('title')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('titulo', ':message') }} </strong>
                        </span>
                </div>

                <div class="form-group">
                    <label for="copete">Copete:</label>
                    <input class="form-control bg-ligth shadow-sm @if($errors->first('copete')) is-invalid @else border-0 @endif"
                    id="copete"
                    type="name"
                    name="copete"
                    value="{{old('copete')}}">

                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('copete', ':message') }} </strong>
                        </span>
                </div>


                <div class="form-group">
                    <label for="title">Descripción:</label>

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
                    <div class="wrapper">
                        <div class="image">
                            <img id = "image_1" src="" alt="">
                        </div>
                        <div class="content">
                            <div class="icon"><i class="fa fa-cloud-upload" ></i></div>

                        </div>
                        <div class="file-name">Imagen 1</i></div>
                    </div>
                    <div class="form-group">

                        <input type="file" name="image_1" onchange="readURL(this);" class="form-control bg-ligth shadow-sm @if($errors->first('image_1')) is-invalid @else border-0 @endif" />
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('image_1', ':message') }} </strong>
                        </span>

                    </div>
                </div>

                <div id="myContainer" class="container">
                    <div class="wrapper">
                        <div class="image">
                            <img id = "image_2" src="" alt="">
                        </div>
                        <div class="content">
                            <div class="icon"><i class="fa fa-cloud-upload" ></i></div>

                        </div>
                        <div class="file-name">Imagen 2</i></div>
                    </div>
                    <div class="form-group">

                        <input type="file" name="image_2" onchange="readURL2(this);" class="form-control bg-ligth shadow-sm @if($errors->first('image_1')) is-invalid @else border-0 @endif" />
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $errors->first('image_2', ':message') }} </strong>
                        </span>

                    </div>
                </div>

                <div id="myContainer" class="container">
                    <div class="wrapper">
                        <div class="image">
                            <img id = "image_3" src="" alt="">
                        </div>
                        <div class="content">
                            <div class="icon"><i class="fa fa-cloud-upload" ></i></div>

                        </div>
                        <div class="file-name">Imagen 3</i></div>
                    </div>
                    <div class="form-group">

                        <input type="file" name="image_3" onchange="readURL3(this);" class="form-control bg-ligth shadow-sm @if($errors->first('image_1')) is-invalid @else border-0 @endif" />
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

@section('scripts')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endsection
