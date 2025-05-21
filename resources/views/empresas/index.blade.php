<x-guestLayout>
    <h1 class="text-4xl font-bold text-center my-8">Lista de Empresas</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto my-8">
        @foreach ($images as $empresas)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center p-6">
                <a href="/empresas/{{ $empresas->id }}" class="w-full flex flex-col items-center">
                    <img class="h-40 w-40 object-cover rounded-full mb-4" src="/img2/{{$empresas->path}}" alt="{{ $empresas->name }}"/>
                    <p class="text-lg font-semibold text-gray-800 text-center">{{ $empresas->name }}</p>
                </a>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center my-8">
        <a href="/empresas/create" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-8 rounded shadow transition duration-200">
            Criar
        </a>
    </div>
</x-guestLayout>
