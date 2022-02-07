@extends('layouts.main')
@section('content')

<div class="container">

    <h3>{{$item->title}}</h3>
    <div class="row">
        <div class="col-md-2 col-lg-2">
            <p class="text-justify font-weight-light">{{$item->copete}}</p>
        </div>


        <div class="col">
            <div class="pull-left">
                <img src="{{$item->image_1}}" class="rounded float-left m-2 img-fluid" alt="...">
            </div>
            <div class="pull-right">
                {!! $item->description !!}
            </div>

         </div>
    </div>
</div>


@endsection
