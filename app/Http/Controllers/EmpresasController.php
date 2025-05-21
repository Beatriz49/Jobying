<x-guestLayout>
<h1 class="text-4xl">Upload de imagens</h1>
<form method="POST" action="/empresas" enctype="multipart/form-data">
    @csrf
    <div class="space-y-4">
        <div>
            <x-label>Nome</x-label>
            <x-input type="text" name="name" id="name"/>
P            @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>Imagem</x-label>
            <x-input type="file" name="image" id="image"/>
            @error('image')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>horario</x-label>
            <x-input type="text" name="horario" id="horario"/>
            @error('horario')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>data</x-label>
            <x-input type="data" name="data" id="data"/>
            @error('data')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>cargo</x-label>
            <x-input type="text" name="cargo" id="cargo"/>
            @error('cargo')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>local</x-label>
            <x-input type="text" name="local" id="local"/>
            @error('local')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>beneficios</x-label>
            <x-input type="text" name="beneficios" id="beneficios"/>
            @error('beneficios')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>idade</x-label>
            <x-input type="idade" name="idade" id="idade"/>
            @error('idade')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>



        <x-button>Upload</x-button>

    </div>

</form>
</x-guestLayout>
