<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $query = Usuario::query();
        
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('apodo', 'like', "%{$search}%");
        }
    
        $usuarios = $query->paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }
    
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'apodo' => 'required|unique:usuarios',
            'contrasenha' => 'required|min:6',
        ]);

        Usuario::create([
            'apodo' => $request->apodo,
            'contrasenha' => Hash::make($request->contrasenha),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito.');
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'apodo' => 'required|unique:usuarios,apodo,' . $usuario->id,
            'contrasenha' => 'nullable|min:6',
        ]);

        $usuario->apodo = $request->apodo;
        if ($request->contrasenha) {
            $usuario->contrasenha = Hash::make($request->contrasenha);
        }
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con éxito.');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
