@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-primary">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4>Editar Pelicula</h4></span>
                    <a href="{{route("peliculas.index")}}" class="btn btn-success btn-sm">Volver a mis listas...</a>
                    {{-- <a href="/peliculas" class="btn btn-primary">Volver</a> --}}
                </div>
                <div class="card-body">                      
                  <form method="POST" action="{{route("peliculas.update", $pelicula->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label for="titulo" class="col-sm-2 col-form-label"><h5>Título :</h5></label>
                        <div class="col-sm-8">
                            <input type="text" name="titulo" class="form-control mb-2" 
                            value="{{$pelicula->titulo}}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="director" class="col-sm-2 col-form-label"><h5>Director :</h5></label>
                      <div class="col-sm-8">
                          <input type="text" name="director" class="form-control mb-2" 
                          value="{{$pelicula->director}}" required/>                          
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="actores" class="col-sm-2 col-form-label"><h5>Actores :</h5></label>
                      <div class="col-sm-10">
                          <input type="text" name="actores" class="form-control mb-2" 
                          value="{{$pelicula->actores}}" required/> 
                      </div>
                    </div>                   
                    <div class="form-group row">
                      <label for="genero" class="col-sm-2 col-form-label"><h5>Genero :</h5></label>
                      <div class="col-sm-6">
                          <input type="text" name="genero" class="form-control mb-2" 
                          value="{{$pelicula->genero}}" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="descripcion" class="col-sm-2 col-form-label"><h5>Reseña :</h5></label>
                      <div class="col-sm-10">
                          {{-- <textarea name="descripcion" class="form-control mb-2" rows="3" 
                          value="{{$pelicula->descripcion}}" required></textarea> --}}
                          <input type="text" name="descripcion" class="form-control mb-2" 
                          value="{{$pelicula->descripcion}}" required/>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="año" class="col-sm-2 col-form-label"><h5>Año :</h5></label>
                      <div class="col-sm-4">
                          <input type="text" name="año" class="form-control mb-2" 
                          value="{{$pelicula->año}}" required/>
                      </div>
                      <label for="calificacion" class="col-sm-3 col-form-label"><h5>Calificación :</h5></label>
                      <div class="col-sm-3">
                          <input type="number" name="calificacion" class="form-control mb-2" 
                          value="{{$pelicula->calificacion}}" required/>                          
                      </div> 
                    </div>
                         
                    @if (session('mensaje'))
                    <div class="alert alert-danger">
                        {{ session('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <button class="btn btn-success float-right" type="submit">Guardar Cambios</button>         
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection