
@extends('layouts.layout')

@section('title')
    Agencia EGO | Home
@endsection

@section('content')
<main>
    <div class="list-title">{{$title}}</div>
    <div class="panel-productos p-4">
      <div class="dropdown d-inline">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar Por
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton01">
          <li><a class="dropdown-item" href="{{route('allCars')}}">Todos</a></li>
          @foreach ($categories as $category)
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('carsByCategory', ['category' => $category->name])}}">{{$category->name}}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="dropdown d-inline float-end">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton02" data-bs-toggle="dropdown" aria-expanded="false">
          Ordenar Por
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton02">
          <li><a class="dropdown-item" href="#">Nada</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{route('carsOrderBy', ['category' =>$cat, 'orderType' => 'preciomenoramayor'])}}">De menor a mayor precio</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{route('carsOrderBy', ['category' =>$cat, 'orderType' => 'preciomayoramenor'])}}">De mayor a menor precio</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{route('carsOrderBy', ['category' =>$cat, 'orderType' => 'masnuevos'])}}">Más nuevos primero</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{route('carsOrderBy', ['category' =>$cat, 'orderType' => 'masviejos'])}}">Más viejos primero</a></li>
        </ul>
      </div>
       
        <div class="row">
            @foreach ($cars as $car)
            @include('components.basicCarCard')
            @endforeach
        </div>
        {{-- <p>{{$cars->links()}}</p> --}}
    </div>
</main>
@endsection
