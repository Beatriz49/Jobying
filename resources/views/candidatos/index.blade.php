@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold text-center mb-6">Lista de Candidatos</h1>

    <a href="{{ route('candidatos.create') }}" class="mb-4 px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700">
        Adicionar Candidato
    </a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
        @foreach($candidatos as $candidato)
            <a href="{{ route('candidatos.show', $candidato->id) }}" class="bg-white p-6 rounded-lg shadow hover:shadow-xl">
                <img src="{{ $candidato->foto }}" alt="Foto do Candidato" class="w-full h-48 object-cover rounded-md">
                <h2 class="text-xl font-semibold text-center mt-4">{{ $candidato->nome }}</h2>
            </a>
        @endforeach
    </div>
</div>
@endsection
