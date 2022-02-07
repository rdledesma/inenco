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
            method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf



                <div class="form-group">

                    {!! $cover->content !!}
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $errors->first('content', ':message') }} </strong>
                    </span>
                </div>
                <a href={{route('cover.index')}} class="btn btn-outline-primary btn-lg btn-rounded">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

