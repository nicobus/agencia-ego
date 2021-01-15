<div class="card-basic card col-sm-12 col-md-6 col-lg-3 border-0">
    <a class="car-detail-link" href="{{route('carDetail', ['car_id' => $car->id])}}"></a>
    <div class="card-body">
        <div class="model">{{$car->model}}</div>
        <div class="year-price">{{$car->year}} | $ {{number_format($car->price, 0, ',', '.')}}</div>
    </div>
    <img src="/img/{{$car->list_image}}"  onerror="this.src='/storage/sin-imagen.png';" class="card-img-top car-image" alt="imagen-producto">
   
</div>