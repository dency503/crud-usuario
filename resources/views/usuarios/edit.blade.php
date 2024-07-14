@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="">

                <!-- Título de la Página -->
                <h1 class="mb-4 text-center">
                    <i class="fas fa-user-edit"></i> Editar Usuario
                </h1>
                <!-- Enlace para Volver a la Lista -->
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mb-3">
                    <i class="fas fa-arrow-left"></i> Volver a la Lista
                </a>
                <!-- Formulario de Edición de Usuario -->
                <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <span >
                            <i class="fas fa-user"></i>
                        </span>
                        <label for="apodo">Apodo:</label>


                        <input type="text" name="apodo" id="apodo" class="form-control" value="{{ $usuario->apodo }}" required>

                    </div>
                    <div class="form-group">
                        <span >
                            <i class="fas fa-lock"></i>
                        </span>
                        <label for="contrasenha">Contraseña:</label>




                        <input type="password" name="contrasenha" id="contrasenha" class="form-control" placeholder="Deja en blanco si no deseas cambiar la contraseña.">
                    </div>
                    <small class="form-text text-muted">Deja en blanco si no deseas cambiar la contraseña.</small>
                    <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-save"></i> Actualizar
            </button>
            </div>
            
            </form>
        </div>
    </div>
    </div>
    @endsection