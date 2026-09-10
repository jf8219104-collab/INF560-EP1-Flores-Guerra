<x-layout>
    @if(!$libro)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded text-center my-8">
            <p class="font-bold">Libro no encontrado con ID: {{ $id }}</p>
            <a href="{{ route('catalogo') }}" class="underline mt-2 inline-block">Volver al catálogo</a>
        </div>
    @else
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto my-6 grid grid-cols-1 md:grid-cols-3">
            <div class="h-64 md:h-auto bg-gradient-to-r {{ $libro['portada'] }} flex items-center justify-center p-6 text-white text-center font-bold text-2xl">
                {{ $libro['titulo'] }}
            </div>
            <div class="p-6 md:col-span-2 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-2">
                        <h2 class="text-3xl font-bold">{{ $libro['titulo'] }}</h2>
                        <span @class([
                            'px-3 py-1 rounded-full text-xs font-bold text-white',
                            'bg-green-600' => $libro['stock'] > 0,
                            'bg-red-600' => $libro['stock'] <= 0
                        ])>
                            {{ $libro['stock'] > 0 ? 'Disponible' : 'Agotado' }}
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4">Por <span class="font-semibold">{{ $libro['autor'] }}</span> ({{ $libro['anio'] }})</p>
                    <p class="text-indigo-600 font-semibold mb-4">Categoría: {{ $libro['categoria'] }}</p>
                    <p class="text-gray-700 mb-6 leading-relaxed">{{ $libro['sinopsis'] }}</p>
                </div>
                <div class="flex justify-between items-center border-t pt-4">
                    <span class="text-2xl font-bold text-gray-900">Bs {{ number_format($libro['precio'], 2, ',', '.') }}</span>
                    <a href="{{ route('catalogo') }}" class="bg-gray-200 text-gray-800 font-medium px-4 py-2 rounded hover:bg-gray-300 transition">
                        Volver al catálogo
                    </a>
                </div>
            </div>
        </div>
    @endif
</x-layout>