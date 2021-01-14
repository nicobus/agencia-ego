
@extends('layouts.layout')

@section('title')
    Agencia EGO | Home
@endsection

@section('content')
<main>
    <div class="list-title">{{$title}}</div>
    <div class="panel-productos p-4">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ordenar por
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Menor precio</a>
              <a class="dropdown-item" href="#">Mayor precio</a>
            </div>
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
