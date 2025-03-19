<x-guest-layout>
    <img src="/img/{{ $image->path }}" class="mx-auto rounded-full" width="200" height="100" />
    <h1 class="text-center">Nome:   {{ $image->name }}</h1>
    <h1 class="text-center">Idade:  {{ $image->idade}} anos</h1>
    <h1 class="text-center">Procurando: {{ $image->procurando }}</h1>
    <h1 class="text-center">Habilitações:   {{ $image->skills }}</h1>
    <h1 class="text-center">Experiencia:    {{ $image->experiencias }}</h1>
    <h1 class="text-center">Trabalhos Anteriores:{{ $image->trabalhos}}</h1>
    <a href="/candidato" class="bg-red-400 p-4 rounded">Voltar</a>
</x-guest-layout>
