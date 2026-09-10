<x-layout>
    <h2 class="text-3xl font-bold mb-6">Catálogo Completo</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse($libros as $libro)
            <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col justify-between hover:shadow-lg transition border border-gray-100">
                <div>
                    <div class="h-44 bg-gradient-to-r {{ $libro['portada'] }} flex items-center justify-center p-4 text-white text-center font-bold text-lg relative">
                        <span>#{{ $loop->iteration }} - {{ $libro['titulo'] }}</span>
                    </div>
                    <div class="p-4">
                        <span class="inline-block bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full font-semibold mb-2">
                            {{ $libro['categoria'] }}
                        </span>
                        <p class="text-sm text-gray-600 mb-2">Autor: {{ $libro['autor'] }}</p>
                        <p class="text-lg font-bold text-gray-900">Bs {{ number_format($libro['precio'], 2, ',', '.') }}</p>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 border-t">
                    <a href="{{ route('libro.detalle', $libro['id']) }}" class="block w-full text-center bg-indigo-600 text-white font-semibold py-2 rounded hover:bg-indigo-700 transition">
                        Ver detalle
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-500 py-8">No hay libros disponibles en este momento.</p>
        @endforelse
    </div>
</x-layout>