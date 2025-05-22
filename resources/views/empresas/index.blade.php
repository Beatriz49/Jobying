<x-guestLayout>
    <h1 class="text-4xl font-bold text-center my-8">Lista de Empresas</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto my-8">
        @foreach ($images as $empresas)
            <div class="bg-white shadow-2xl rounded-lg overflow-hidden flex flex-col items-center px-4 py-6 hover:border-blue-950 hover:border transition-colors duration-200">
                <a href="/empresas/{{ $empresas->id }}" class="w-full flex flex-col items-center">
                    <img class="h-40 w-40 object-cover rounded-full mb-4" src="/img2/{{$empresas->path}}" alt="{{ $empresas->name }}"/>
                    <p class="text-lg font-semibold text-gray-800 text-center">{{ $empresas->name }}</p>
                </a>
                <p class="text-gray-600 text-center mt-2">{{ $empresas->nome }}</p>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center my-8">
        <a href="/empresas/create" class="bg-blue-950 hover:bg-blue-900 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-200 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Criar
        </a>
    </div>
</x-guestLayout>
