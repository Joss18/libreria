<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $titulo = $request->get('titulo');
        $director = $request->get('director');
        $genero = $request->get('genero');

        $usuarioEmail = auth()->user()->email;
        $peliculas = Pelicula::where('usuario', $usuarioEmail)->orderBy('calificacion', 'DESC')
        ->titulo($titulo)
        ->director($director)
        ->genero($genero)
        ->paginate(10);        
      
        return view('peliculas.lista',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->director = $request->director;
        $pelicula->actores = $request->actores;       
        $pelicula->genero = $request->genero;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->año = $request->año;
        $pelicula->url_img = $request->imagen;
        $pelicula->calificacion = $request->calificacion;
        $pelicula->usuario = auth()->user()->email;
        $pelicula->save();
    
        return back()->with('mensaje', 'Pelicula Agregada...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);

        return view('peliculas.detalle', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.editar', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peliActualizada = Pelicula::find($id);       
        $peliActualizada->titulo = $request->titulo;
        $peliActualizada->director = $request->director;
        $peliActualizada->actores = $request->actores;       
        $peliActualizada->genero = $request->genero;
        $peliActualizada->descripcion = $request->descripcion;
        $peliActualizada->año = $request->año;
        $peliActualizada->calificacion = $request->calificacion;

        $peliActualizada->save();
       
        return back()->with('mensaje', 'Pelicula Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peliEliminar = Pelicula::findOrFail($id);
        $peliEliminar->delete();
    
        return back()->with('mensaje', 'Pelicula Eliminada');
    }
}
