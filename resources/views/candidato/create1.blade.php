<x-guest-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-4xl font-bold mb-8 text-center">Criar Candidatura</h1>
        <form method="POST" action="/candidato/store" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <x-label for="name">Nome</x-label>
                <x-input type="text" name="name" id="name" class="w-full" value="{{ old('name') }}"/>
                @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="image">Imagem</x-label>
                <input type="file" name="image" id="image" class="w-full"/>
                @error('image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="idade">Idade</x-label>
                <x-input type="number" name="idade" id="idade" class="w-full" value="{{ old('idade') }}"/>
                @error('idade')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="procurando">Procurando</x-label>
                <x-input type="text" name="procurando" id="procurando" class="w-full" value="{{ old('procurando') }}"/>
                @error('procurando')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="skills">Skills</x-label>
                <x-input type="text" name="skills" id="skills" class="w-full" value="{{ old('skills') }}"/>
                @error('skills')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="experiencias">Experiências</x-label>
                <x-input type="text" name="experiencias" id="experiencias" class="w-full" value="{{ old('experiencias') }}"/>
                @error('experiencias')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="trabalhos">Trabalhos</x-label>
                <x-input type="text" name="trabalhos" id="trabalhos" class="w-full" value="{{ old('trabalhos') }}"/>
                @error('trabalhos')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-8">
                <x-button class="bg-blue-600 hover:bg-blue-700">Upload</x-button>
                <a href="/candidato" class="bg-red-400 hover:bg-red-500 text-white p-2 rounded transition">Voltar</a>
            </div>
        </form>
    </div>
</x-guest-layout>
