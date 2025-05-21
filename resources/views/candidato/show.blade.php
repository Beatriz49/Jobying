<x-guest-layout>
    <div class="max-w-xl mx-auto bg-white shadow-lg rounded-lg p-8 mt-10">
        <div class="flex flex-col items-center">
            @if(isset($image))
                <img src="/img/{{ $image->path ?? '' }}" class="rounded-full shadow-md mb-6" width="160" height="160" alt="Foto de {{ $image->name ?? '' }}" />
                <h2 class="text-2xl font-bold mb-2">{{ $image->name ?? '' }}</h2>
                <p class="text-gray-600 mb-1"><span class="font-semibold">Idade:</span> {{ $image->idade ?? '' }} anos</p>
                <p class="text-gray-600 mb-1"><span class="font-semibold">Procurando:</span> {{ $image->procurando ?? '' }}</p>
                <p class="text-gray-600 mb-1"><span class="font-semibold">Habilitações:</span> {{ $image->skills ?? '' }}</p>
                <p class="text-gray-600 mb-1"><span class="font-semibold">Experiência:</span> {{ $image->experiencias ?? '' }}</p>
                <p class="text-gray-600 mb-4"><span class="font-semibold">Trabalhos Anteriores:</span> {{ $image->trabalhos ?? '' }}</p>
            @else
                <p class="text-red-500 mb-4">Dados do candidato não encontrados.</p>
            @endif
            <a href="/candidato" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded transition">Voltar</a>
        </div>
    </div>
</x-guest-layout>
