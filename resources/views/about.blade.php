@extends('layouts.main')
@section('content')

<div class="container">

    @foreach ($integrants as $item)

    <div class="row mt-2">
        <div class="col-md-3">
            <div class="imgAbt">
                <img width="220" height="220" src="https://lh3.googleusercontent.com/a/default-user=s40-c" />
            </div>
        </div>
        <div class="col-md-8">
            {{$item->name}} - {{$item->description}} - {{$item->title}}
            <p>{{$item->email}}</p>
        </div>
    </div>
    @endforeach



</div>
@endsection
