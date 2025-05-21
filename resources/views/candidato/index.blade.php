<x-guestLayout>
    <div class="max-w-6xl mx-auto py-10 px-4">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-4xl font-bold text-gray-800">Lista de Candidatos</h1>
            <a href="/candidato/create" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded shadow transition">Criar</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($images as $image)
                <a href="/candidato/{{ $image->id }}" class="block bg-white rounded-lg shadow hover:shadow-lg transition border hover:border-red-400">
                    <img class="h-48 w-full object-cover rounded-t-lg" src="/img/{{$image->path}}" alt="{{ $image->name }}">
                    <div class="p-4">
                        <p class="text-center text-lg font-semibold text-gray-700">{{ $image->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>
