@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="container mt-5">
    <h1><i class="fas fa-users"></i> Gestión de Usuarios</h1>
    
    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            toastr.success("{{ session('success') }}", 'Éxito');
        });
    </script>
    @endif

    <div class="panel panel-default">
    <div class="panel-heading bg-primary text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="panel-title mb-0">Lista de Usuarios</h3>
                <div>
                    <!-- Botón de Crear Usuario a la derecha -->
                    <a href="{{ route('usuarios.create') }}" class="btn btn-light text-primary ml-2">
                        <i class="fas fa-user-plus"></i> Crear Usuario
                    </a>
                    <!-- Formulario de Búsqueda -->
                    <form action="{{ route('usuarios.index') }}" method="GET" class="d-inline-block ml-2">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Buscar por apodo..." value="{{ request()->get('search') }}">
                            <span class="input-group-btn">
                                <button class="btn btn-light text-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Apodo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->apodo }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-info-circle"></i> Detalles
                            </a>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <a action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
            <strong>Mostrando {{ $usuarios->count() }} de {{ $usuarios->total() }} usuarios</strong>
        </div>
        <div class="panel-footer text-center">
            {{ $usuarios->appends(request()->query())->links('pagination::bootstrap-3') }}
        </div>
    </div>
</div>
@endsection
