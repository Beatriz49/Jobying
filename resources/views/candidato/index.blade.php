
<x-guestLayout>
    <h1 class="text-4xl">Lista de imagens</h1>


    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto my-8">
        @foreach ($images as $image)
            <div class="border">
                <a href="/candidato/{{ $image->id }}">
                <img class="h-48 m-auto" src="/img/{{$image->path}}"/>
                <p class="text-center">{{ $image->name }}</p>


            </div>
        @endforeach
        </a>
    </div>
    <a href="/candidato/create" class="bg-red-400 p-4 rounded">Criar</a>
</x-guestLayout>
