@extends('layouts.app')

@section('title', 'Detalles del Usuario')

@section('content')
<div class="mt-5">
    <div class="row justify-content-center">
        <div >
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left">Detalles del Usuario</h4>
                    <div class="btn-group pull-right">
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">
                            <i class="glyphicon glyphicon-edit"></i> Editar
                        </a>
                        <a action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                <i class="glyphicon glyphicon-trash"></i> Eliminar
                            </button>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <strong>ID:</strong>
                        </div>
                        <div class="col-md-9">
                            <p class="form-control-static">{{ $usuario->id }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <strong>Apodo:</strong>
                        </div>
                        <div class="col-md-9">
                            <p class="form-control-static">{{ $usuario->apodo }}</p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">
                        <i class="glyphicon glyphicon-arrow-left"></i> Volver a la Lista
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


