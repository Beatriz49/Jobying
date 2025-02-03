@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold text-center mb-6">Adicionar Candidato</h1>

    <form action="{{ route('candidatos.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
        @csrf

        <label class="block mb-2 font-semibold">Nome</label>
        <input type="text" name="nome" class="w-full border border-gray-300 p-2 rounded mb-4" required>

        <label class="block mb-2 font-semibold">Idade</label>
        <input type="number" name="idade" class="w-full border border-gray-300 p-2 rounded mb-4" required>

        <label class="block mb-2 font-semibold">Foto (URL)</label>
        <input type="text" name="foto" class="w-full border border-gray-300 p-2 rounded mb-4">

        <label class="block mb-2 font-semibold">Skills</label>
        <input type="text" name="skills" class="w-full border border-gray-300 p-2 rounded mb-4" required>

        <label class="block mb-2 font-semibold">Experiências</label>
        <textarea name="experiencias" class="w-full border border-gray-300 p-2 rounded mb-4" required></textarea>

        <label class="block mb-2 font-semibold">Trabalhos Anteriores</label>
        <textarea name="trabalhos" class="w-full border border-gray-300 p-2 rounded mb-4" required></textarea>

        <label class="block mb-2 font-semibold">O que procura?</label>
        <input type="text" name="procurando" class="w-full border border-gray-300 p-2 rounded mb-4" required>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Salvar
        </button>
    </form>
</div>
@endsection
