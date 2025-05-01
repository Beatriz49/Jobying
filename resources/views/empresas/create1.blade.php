<x-guest-layout>
    <h1 class="text-4xl">Criar perfil de empresa</h1>

    <form method="POST" action="/empresas/store" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            <x-validation-errors/>
            <div>
                <x-label for="name">Nome</x-label>
                <x-input type="text" name="name" id="name" value="abcdefgh"/>
                @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="image">Imagem</x-label>
                <x-input type="file" name="image" id="image"/>
                @error('image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="horario">Horario</x-label>
                <x-input type="text" name="horario" id="horario" value="abcdefgh"/>
                @error('horario')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="data">data</x-label>
                <x-input type="date" name="data" id="data" value="abcdefgh"/>
                @error('data')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="cargo">cargo</x-label>
                <x-input type="text" name="cargo" id="cargo" value="abcdefgh"/>
                @error('cargo')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        <div>
            <x-label for="local">local</x-label>
            <x-input type="text" name="local" id="local" value="abcdefgh"/>
            @error('local')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="beneficios">beneficios</x-label>
            <x-input type="text" name="beneficios" id="beneficios" value="abcdefgh"/>
            @error('beneficio')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="perfilesperado">perfil esperado</x-label>
            <x-input type="text" name="perfilesperado" id="perfilesperado" value="abcdefgh"/>
            @error('perfilesperado')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="detalhes">detalhes</x-label>
            <x-input type="text" name="detalhes" id="detalhes" value="abcdefgh"/>
            @error('detalhes')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <x-button>Upload</x-button>
        <a href="/empresas" class="bg-red-400 p-2 rounded">Voltar</a>
    </form>

</x-guest-layout>
