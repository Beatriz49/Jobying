<x-guestlayout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 to-indigo-200 py-12 px-4">
        <div class="w-full max-w-2xl bg-white shadow-2xl rounded-2xl p-10">
            <h1 class="text-4xl font-extrabold mb-8 text-center text-indigo-800 tracking-tight">Criar Perfil de Empresa</h1>
            <form method="POST" action="/empresas/store" enctype="multipart/form-data" class="space-y-7">
                @csrf
                <x-validation-errors class="mb-4"/>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-label for="name" class="font-semibold text-gray-700">Nome</x-label>
                        <x-input type="text" name="name" id="name" class="w-full" value="{{ old('name') }}"/>
                        @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <x-label for="image" class="font-semibold text-gray-700">Imagem</x-label>
                        <x-input type="file" name="image" id="image" class="w-full"/>
                        @error('image')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-label for="horario_inicio" class="font-semibold text-gray-700">Horário Início</x-label>
                        <x-input type="time" name="horario_inicio" id="horario_inicio" class="w-full" value="{{ old('horario_inicio') }}"/>
                        @error('horario_inicio')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <x-label for="horario_fim" class="font-semibold text-gray-700">Horário Fim</x-label>
                        <x-input type="time" name="horario_fim" id="horario_fim" class="w-full" value="{{ old('horario_fim') }}"/>
                        @error('horario_fim')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <x-label for="data" class="font-semibold text-gray-700">Data</x-label>
                        <x-input type="date" name="data" id="data" class="w-full" value="{{ old('data') }}"/>
                        @error('data')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-label for="cargo" class="font-semibold text-gray-700">Cargo</x-label>
                        <x-input type="text" name="cargo" id="cargo" class="w-full" value="{{ old('cargo') }}"/>
                        @error('cargo')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <x-label for="local" class="font-semibold text-gray-700">Local</x-label>
                        <x-input type="text" name="local" id="local" class="w-full" value="{{ old('local') }}"/>
                        @error('local')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-label for="beneficios" class="font-semibold text-gray-700">Benefícios</x-label>
                        <x-input type="text" name="beneficios" id="beneficios" class="w-full" value="{{ old('beneficios') }}"/>
                        @error('beneficios')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <x-label for="perfilesperado" class="font-semibold text-gray-700">Perfil Esperado</x-label>
                        <x-input type="text" name="perfilesperado" id="perfilesperado" class="w-full" value="{{ old('perfilesperado') }}"/>
                        @error('perfilesperado')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-8">
                    <a href="/empresas" class="bg-red-400 hover:bg-red-500 text-white px-6 py-2 rounded-lg transition w-full md:w-auto text-center">Voltar</a>
                    <x-button class="bg-indigo-600 hover:bg-indigo-700 w-full md:w-auto">Salvar</x-button>
                </div>
            </form>
        </div>
    </div>
</x-guestlayout>
