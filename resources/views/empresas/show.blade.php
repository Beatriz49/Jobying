<x-guest-layout>
    <div class="max-w-xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
        <div class="flex flex-col items-center">
            <img src="/img2/{{ $image->path }}" class="rounded-full mb-6" width="200" height="100" />
            <h2 class="text-2xl font-bold mb-4">{{ $image->name }}</h2>
        </div>
        <div class="space-y-3">
            <div>
                <span class="font-semibold">Horário:</span>
                <span>{{ $image->horario }}</span>
            </div>
            <div>
                <span class="font-semibold">Data de Submissão:</span>
                <span>{{ $image->data }}</span>
            </div>
            <div>
                <span class="font-semibold">Cargo:</span>
                <span>{{ $image->cargo }}</span>
            </div>
            <div>
                <span class="font-semibold">Local:</span>
                <span>{{ $image->local }}</span>
            </div>
            <div>
                <span class="font-semibold">Benefícios:</span>
                <span>{{ $image->beneficios }}</span>
            </div>
            <div>
                <span class="font-semibold">Perfil Desejado:</span>
                <span>{{ $image->perfilesperado }}</span>
            </div>
            <div>
                <span class="font-semibold">Detalhes:</span>
                <span>{{ $image->detalhes }}</span>
            </div>
        </div>
        <div class="mt-8 text-center">
            <a href="/empresas" class="bg-red-400 hover:bg-red-500 text-white px-6 py-2 rounded transition">Voltar</a>
        </div>
    </div>
</x-guest-layout>
