@extends('layouts.main')
@section('content')

<div class="container">
<div class="row row-cols-1 row-cols-md-4 g-4">


    @foreach ($integrants as $item)
    <div class="col">
        <div class="card">
          <img class="card-img-top " height="200" src="{{$item->url_photo}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <div class="integrant">
              <p>{{$item->charge}} </p>
              <p>{{$item->description}}</p>
              <p>{{$item->email}}</p>
              <a href="{{route('integrant.file', $item->id)}}">Descargar cv</a>
            </div>
        </div>
      </div>
    </div>
    @endforeach

</div>
</div>


@endsection
