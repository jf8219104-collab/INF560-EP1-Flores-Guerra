<x-layout>
    <div class="bg-indigo-600 text-white rounded-lg p-8 mb-8 text-center shadow-lg">
        <h2 class="text-4xl font-extrabold mb-2">Bienvenido a la Librería en Línea</h2>
        <p class="mb-6 text-indigo-100">Encuentra los mejores libros de literatura, tecnología y más.</p>
        <a href="{{ route('catalogo') }}" class="inline-block bg-white text-indigo-600 font-bold px-6 py-3 rounded-md shadow hover:bg-indigo-50 transition">
            Ver Catálogo
        </a>
    </div>

    <h3 class="text-2xl font-bold mb-4">Libros Destacados</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($libros as $libro)
            @if($libro['destacado'])
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-xl transition">
                    <div class="h-40 bg-gradient-to-r {{ $libro['portada'] }} flex items-center justify-center text-white font-bold text-xl px-4 text-center">
                        {{ $libro['titulo'] }}
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500">Por {{ $libro['autor'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-layout>