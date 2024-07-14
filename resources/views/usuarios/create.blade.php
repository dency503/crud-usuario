<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - Mi Aplicación</title>
    @vite('resources/css/app.css')
    <style>
       
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="form-container">
                <!-- Título de la Página -->
                <h1 class="mb-4 text-center">
                    <i class="fas fa-user-plus"></i> Crear Usuario
                </h1>
                
                <!-- Enlace para Volver a la Lista -->
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mb-3">
                    <i class="fas fa-arrow-left"></i> Volver a la Lista
                </a>
                
                <!-- Formulario de Creación de Usuario -->
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <i class="fas fa-user input-icon"></i>
                        <label for="apodo">Apodo:</label>
                        <input type="text" name="apodo" id="apodo" class="form-control" placeholder="Ingrese el apodo del usuario" required>
                        
                    </div>
                    <div class="form-group">
                    <i class="fas fa-lock input-icon"></i>
                        <label for="contrasenha">Contraseña:</label>
                        <input type="password" name="contrasenha" id="contrasenha" class="form-control" placeholder="Ingrese una contraseña" required>
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-check"></i> Crear Usuario
                    </button>
                </form>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
