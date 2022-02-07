@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="bg-white shadow rounded py-3 px-4">
                <div class="form-group">
                    <label for="title">Título:</label>
                    <p class="bg-ligth shadow-sm">{{$publication->title}}</p>
                </div>

                <div class="form-group">
                    <label for="copete">Copete:</label>
                    <p class="bg-ligth shadow-sm">{{$publication->copete}}</p>
                </div>


                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <p class="bg-ligth shadow-sm">{!!$publication->description!!}</p>
                </div>


                <div id="myContainer" class="container">
                    <div class="wrapper">
                        <div class="image">
                            <img id = "image_1" src="{{$publication->image_1}}" alt="">
                        </div>
                    </div>
                </div>

                <div id="myContainer" class="container">
                    <div class="wrapper">
                        <div class="image">
                            <img id = "image_2" src="{{$publication->image_2}}" alt="">
                        </div>
                    </div>
                </div>


                <div id="myContainer" class="container">
                    <div class="wrapper">
                        <div class="image">
                            <img id = "image_3" src="{{$publication->image_3}}" alt="">
                        </div>
                    </div>
                </div>
                <a href={{route('publication.index')}} class="btn btn-outline-primary btn-lg btn-rounded">Cancelar</a>
            </div>
        </div>
    </div>
</div>
@endsection
