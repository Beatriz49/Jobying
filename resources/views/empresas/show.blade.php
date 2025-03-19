<x-guest-layout>
    <img src="/img2/{{ $image->path }}" class="mx-auto rounded-full" width="200" height="100" />
    <h1 class="text-center">Nome da Empresa:   {{ $image->name }}</h1>
    <h1 class="text-center">Horario:  {{ $image->horario}}</h1>
    <h1 class="text-center">Data de submição: {{ $image->data }}</h1>
    <h1 class="text-center">Cargo:   {{ $image->cargo}}</h1>
    <h1 class="text-center">Local:    {{ $image->local}}</h1>
    <h1 class="text-center">Beneficios:{{ $image->beneficios}}</h1>
    <h1 class="text-center">Perfil desejado:{{ $image->perfilesperado}}</h1>
    <h1 class="text-center">Detalhes:{{ $image->detalhes}}</h1>
    <a href="/empresas" class="bg-red-400 p-4 rounded">Voltar</a>
</x-guest-layout>
