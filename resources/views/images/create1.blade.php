<x-guest-layout>
    <h1 class="text-4xl">Upload de imagens</h1>

    <form method="POST" action="/images/store" enctype="multipart/form-data">
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
                <x-label for="teste">Teste</x-label>
                <x-input type="text" name="teste" id="teste"/>
                @error('teste')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="idade">Idade</x-label>
                <x-input type="number" name="idade" id="idade"/>
                @error('idade')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="procurando">Procurando</x-label>
                <x-input type="text" name="procurando" id="procurando"/>
                @error('procurando')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        <div>
            <x-label for="skills">Skills</x-label>
            <x-input type="text" name="skills" id="skills"/>
            @error('skills')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="procurando">procurando</x-label>
            <x-input type="text" name="procurando" id="procurando"/>
            @error('procurando')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="experiencias">experiencias</x-label>
            <x-input type="text" name="experiencias" id="experiencias"/>
            @error('experiencias')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label for="trabalhos">trabalhos</x-label>
            <x-input type="text" name="trabalhos" id="trabalhos"/>
            @error('trabalhos')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <x-button>Upload</x-button>
        <a href="/images" class="bg-red-400 p-2 rounded">Voltar</a>
    </form>

    </x-guest-layout>
