@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content">
    <div class="col-md-4">
      {{-- <a href="{{route("peliculas.index")}}" class="btn btn-success mb-2 float-right">Volver a mis listas...</a> --}}
      <a href="{{route("peliculas.index")}}" class="btn btn-success mb-2">Volver a mis listas...</a>
    </div>
  </div> 
  {{-- <div class="row justify-content-center"> --}}
  <div class="row">
    {{-- <h3>Detalle de mis peliculas : {{ Auth::user()->name }}</h3>    --}}    
    <div class="card text-white bg-primary" style="max-width: 1200px;">
        <div class="row no-gutters">
          <div class="col-md-4">            
            <img src="../images/{{ $pelicula->url_img }}" class="card-img">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h3 class="card-title">Detalles de la Película</h3>
                <h4>Título : {{ $pelicula->titulo }}</h4>
                <h5>Director : {{ $pelicula->director }}</h5>
                <h5>Actores : {{ $pelicula->actores }}</h5>
                <h5>Año : {{ $pelicula->año }}</h5>
                <h5>Género : {{ $pelicula->genero }}</h5>
                <h5>Sinopsis : {{ $pelicula->descripcion }}</h5>
                <h3>Calificación : {{ $pelicula->calificacion }}</h3>
            </div>            
          </div>
          <div class="col-md-4">            
            <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="../videos/{{ $pelicula->url_mov }}"></iframe>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection
