
<x-guestLayout>
    <h1 class="text-4xl">Lista de Empresas</h1>


    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto my-8">
        @foreach ($images as $empresas)
            <div class="border">
                <a href="/empresas/{{ $empresas->id }}">
                <img class="h-48 m-auto" src="/img2/{{$empresas->path}}"/>
                <p class="text-center">{{ $empresas->name }}</p>


            </div>
        @endforeach
        </a>
    </div>
    <a href="/empresas/create" class="bg-red-400 p-4 rounded">Criar</a>
</x-guestLayout>
