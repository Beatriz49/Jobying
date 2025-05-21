<x-guest-layout>
    <div class="max-w-6xl mx-auto py-10 px-4">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-4xl font-bold text-gray-800">Lista de Candidatos</h1>
            <a href="/candidato/create" class="inline-flex items-center gap-2 bg-blue-950 hover:bg-blue-800 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Criar
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($images as $image)
                <a href="/candidato/{{ $image->id }}" class="block bg-white rounded-lg shadow hover:shadow-lg transition border hover:border-blue-950">
                    <img class="h-48 w-full object-cover rounded-t-lg" src="{{ asset('img/' . $image->path) }}" alt="{{ $image->name }}">
                    <div class="p-4">
                        <p class="text-center text-lg font-semibold text-gray-700">{{ $image->name }}</p>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center text-gray-500 py-10">
                    Nenhum candidato encontrado.
                </div>
            @endforelse
        </div>
    </div>
</x-guest-layout>
