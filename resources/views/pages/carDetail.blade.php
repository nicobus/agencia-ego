
@extends('layouts.layout')

@section('title')
    Agencia EGO | Home
@endsection

@section('content')
<main>
    <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/{{$car->list_image}}" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">{{$car->model}}</h6>
                <h5 class="card-title">{{$car->title}}</h5>
                <p class="card-text">{{$car->general_description}}</p>
            </div>
          </div>
        </div>
      </div>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
    <div class="card" style="width: 18rem;">
                <img src="/img/{{$car->image_carrousel_01}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$car->title_image_carrousel_01}}</h5>
                  <p class="card-text">{{$car->description_image_carrousel_01}}</p>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                <img src="/img/{{$car->image_carrousel_02}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$car->title_image_carrousel_02}}</h5>
                  <p class="card-text">{{$car->description_image_carrousel_02}}</p>
                </div>
              </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                <img src="/img/{{$car->image_carrousel_03}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$car->title_image_carrousel_03}}</h5>
                  <p class="card-text">{{$car->description_image_carrousel_03}}</p>
                </div>
              </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                <img src="/img/{{$car->image_carrousel_04}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$car->title_image_carrousel_04}}</h5>
                  <p class="card-text">{{$car->description_image_carrousel_04}}</p>
                </div>
              </div>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/{{$car->image_subtitle_01}}" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$car->subtitle_01}}</h5>
                <p class="card-text">{{$car->description_subtitle_01}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/{{$car->image_subtitle_02}}" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$car->subtitle_02}}</h5>
                <p class="card-text">{{$car->description_subtitle_02}}</p>
            </div>
          </div>
        </div>
      </div>
</main>
@endsection
