@extends('layouts.main')
@section('content')

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">


    @foreach ($publications as $item)
    <div class="col">
        <div class="card">
          <img class="card-img-top " height="200" src="{{$item->image_1}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <div class="integrant">
                <p>{{$item->created_at->format('d M, Y')}} </p>
                <p>{{$item->copete}} </p>
                <a href="{{route('publication.ver', $item->slug)}}">Ver mas</a>
            </div>
        </div>
      </div>
    </div>
    @endforeach

</div>
</div>


@endsection
