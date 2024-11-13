<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function index()
    {
        $libros = Libro::all();
        return view('home', compact('libros'));
    }

    public function create()
    {
        return view('libros.registrar');
    }

    public function store(Request $request)
    {
        // Validaciones de entrada
        $validated = $request->validate([
            'isbn' => 'required|numeric|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1000|max:' . date('Y'),
            'editorial' => 'required|string',
            'email_editorial' => 'required|email',
        ]);

        // Almacenar el libro en la base de datos usando el modelo Libro
        $libro = Libro::create([
            'isbn' => $validated['isbn'],
            'titulo' => $validated['titulo'],
            'autor' => $validated['autor'],
            'paginas' => $validated['paginas'],
            'anio' => $validated['anio'],
            'editorial' => $validated['editorial'],
            'email_editorial' => $validated['email_editorial'],
        ]);

        // Mensaje de confirmación
        return redirect()->route('principal')->with('success', __('Todo correcto: Libro ":titulo" guardado', ['titulo' => $libro->titulo]) . ' | ' . __('All good: Book ":titulo" saved', ['titulo' => $libro->titulo]));
    }
}
