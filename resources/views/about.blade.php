@extends('layouts.main')
@section('content')

<div class="container">

    @foreach ($integrants as $item)

    <div class="row mt-2">
        <div class="col-md-3">
            <div class="imgAbt">
                <img width="200" height="200" src="https://lh3.googleusercontent.com/a/default-user=s40-c" />
            </div>
        </div>
        <div class="col-md-8">
            {{$item->name}} - {{$item->description}} - {{$item->title}}
            <p>{{$item->email}}</p>
            <a href="{{route('integrant.file', $item->id)}}">Curriculum</a>
        </div>
    </div>
    @endforeach



</div>
@endsection
