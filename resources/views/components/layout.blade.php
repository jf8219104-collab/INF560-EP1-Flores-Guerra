<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería en Línea</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">📖 Librería Virtual</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('inicio') }}" 
                   @class(['px-3 py-2 rounded-md font-medium transition', 'bg-indigo-600 text-white' => request()->routeIs('inicio'), 'text-gray-600 hover:text-indigo-600' => !request()->routeIs('inicio')])>
                   Inicio
                </a>
                <a href="{{ route('catalogo') }}" 
                   @class(['px-3 py-2 rounded-md font-medium transition', 'bg-indigo-600 text-white' => request()->routeIs('catalogo'), 'text-gray-600 hover:text-indigo-600' => !request()->routeIs('catalogo')])>
                   Catálogo
                </a>
                <a href="{{ route('nosotros') }}" 
                   @class(['px-3 py-2 rounded-md font-medium transition', 'bg-indigo-600 text-white' => request()->routeIs('nosotros'), 'text-gray-600 hover:text-indigo-600' => !request()->routeIs('nosotros')])>
                   Nosotros
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-7xl w-full mx-auto p-4">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>© {{ date('Y') }} Librería Virtual - Todos los derechos reservados.</p>
    </footer>

</body>
</html>