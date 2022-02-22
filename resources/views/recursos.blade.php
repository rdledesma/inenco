@extends('layouts.main')
@section('content')

<div class="container">
    <form class="bg-white shadow rounded py-3 px-4"
            action="{{route('recursos.search')}}"
            method="POST">
            @csrf
            <div class="row">


                <div class="col">
                    <div class="input-group">
                        <input type="name" value="{{ !empty($name) ?  $name : ''}}"   name="name" class="form-control rounded m-2" placeholder="Buscar" aria-label="Buscar"
                        aria-describedby="search-addon" />
                        <input type="date" value="{{ !empty($date) ?  $date : ''}}"  name="date" class="form-control rounded m-2" placeholder="Buscar" aria-label="Buscar"
                        aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </div>


            </div>

    </form>



    <div class="col-lg-6 col-md-12">

        @foreach ($resources as $item)

        <div class="row mt-2">
            <div class="col-md-8">
                {{$item->name}}
                <a href="{{route('resource.show', $item->id)}}">{{$item->file}}</a>
            </div>
        </div>
        @endforeach

    </div>




</div>
@endsection
