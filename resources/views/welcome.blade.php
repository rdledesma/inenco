@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('images/energia-solar.jpg')}}" class="d-block w-100 opacity-75" height="300vh" alt="...">
                {{--<div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>--}}
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img src="{{asset('images/permer-salta-1280x640.jpg')}}" class="d-block w-100 opacity-75" height="300vh" alt="...">
                {{--<div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>--}}
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img src="https://s.w-x.co/util/image/w/0102_grayson_vis_0.jpg?crop=16:9&width=980&format=pjpg&auto=webp&quality=60" class="d-block w-100 opacity-75" height="300vh" alt="...">
                {{--<div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>--}}
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


          <div class="mt-5">
            @if ($ad)
                {!!$ad->content!!}
            @endif

          </div>
    </div>
</div>
@endsection

