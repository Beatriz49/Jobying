<x-guest-layout>
    <h1 class="text-4xl">Criar Candidatura</h1>

    <form method="POST" action="/empresas/store" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="name">Nome</x-label>
                <x-input type="text" name="name" id="name"/>
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
                <x-input type="text" name="horario" id="horario"/>
                @error('horario')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="data">data</x-label>
                <x-input type="data" name="data" id="data"/>
                @error('data')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="cargo">cargo</x-label>
                <x-input type="text" name="cargo" id="cargo"/>
                @error('cargo')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        <div>
            <x-label for="local">local</x-label>
            <x-input type="text" name="local" id="local"/>
            @error('local')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="beneficio">beneficios</x-label>
            <x-input type="text" name="beneficio" id="beneficio"/>
            @error('beneficio')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="perfilesperado">perfil esperado</x-label>
            <x-input type="text" name="perfilesperado" id="perfilesperado"/>
            @error('perfilesperado')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="detalhes">detalhes</x-label>
            <x-input type="text" name="detalhes" id="detalhes"/>
            @error('detalhes')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <x-button>Upload</x-button>
        <a href="/empresas" class="bg-red-400 p-2 rounded">Voltar</a>
    </form>

</x-guest-layout>
