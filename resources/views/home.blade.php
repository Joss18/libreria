@extends('layouts.app')

@section('content')
<div class="container mt-5">
    {{-- <img src="/storage/im04.jpg" alt=""> --}}
    {{-- <img src="public/storage/imagenes/im04.jpg" alt=""> --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-white">Calificación de mis Peliculas</h2>
            <div class="card">
                <div class="card-header"><h4>Dashboard by : {{ Auth::user()->name }}</h4></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Director</th>
                            <th scope="col">Calificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($pelicula as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->director }}</td>
                                <td>{{ $item->calificacion }}</td>
                                
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    {{-- {{$pelicula->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
