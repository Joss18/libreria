@extends('layouts.app')

@section('content')

<div class="container mt-2">   
    <div class="row justify-content-center">
        <div class="col-md-10">            
            <div class="card">
                <div class="card-header"><h5>Clasificación de mis peliculas : {{ Auth::user()->name }}</h5>                    
                </div> 
                <div class="card-body row">                                       
                    <div class="col-md-4">
                        <a href="{{route("peliculas.create")}}" class="btn btn-success btn-sm">Nueva Pelicula</a>
                    </div>
                    <div class="col-md-8">
                    <form class="form-inline" method="GET" action="{{route("peliculas.index")}}">
                        <div class="form-group">                            
                            <input type="text" class="form-control-sm mb-2 col-md-4" name="titulo" placeholder="Título">                           
                            <input type="text" class="form-control-sm mb-2 col-md-3" name="director" placeholder="Director">                           
                            <input type="text" class="form-control-sm mb-2 col-md-3" name="genero" placeholder="Género">                          
                            <button type="submit" class="btn btn-primary btn-sm ml-2 mb-2">Buscar</button>                                                     
                        </div>
                    </form>
                    </div>
                    @if (session('mensaje'))
                    <div class="alert alert-danger col-md-3">
                        {{ session('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table mt-2">
                        <thead>
                            <tr>
                            <th scope="col"><h5>#</h5></th>
                            <th scope="col"><h5>Titulo</h5></th>
                            <th scope="col"><h5>Director</h5></th>
                            <th scope="col"><h5>Género</h5></th>
                            <th scope="col"><h5>Puntaje</h5></th>                                
                            <th scope="col"><h5>Administración</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peliculas as $item)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->director }}</td>
                                <td>{{ $item->genero }}</td>
                                <td class="text-center">{{ $item->calificacion }}</td>
                                <td>
                                    <a href={{route("peliculas.show", $item)}} class="btn btn-outline-success btn-sm">Ver</a>
                                    <a href='{{route("peliculas.edit", $item)}}' class="btn btn-outline-primary btn-sm">Edit</a>
                                    {{-- <a href='' class="btn btn-outline-danger btn-sm">Borrar</a> --}}
                                    <form action="{{ route('peliculas.destroy', $item) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Del</button>
                                    </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$peliculas->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
