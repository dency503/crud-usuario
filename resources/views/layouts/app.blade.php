<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Administración Eficaz</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-dark text-white p-3 mb-4">
        <div class="container">
            
        </div>
    </header>
    <main class="container background">
        @yield('content')
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; {{ date('Y') }} Administración Eficaz. Todos los derechos reservados.</p>
    </footer>
    @vite('resources/js/app.js')

 
   
</body>
</html>
