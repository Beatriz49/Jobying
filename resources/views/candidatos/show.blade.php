<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Perfil do Candidato</title>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ $candidato->foto }}" alt="Foto do Candidato" class="w-full h-64 object-cover rounded-md">
        <h2 class="text-2xl font-bold mt-4 text-gray-800">{{ $candidato->nome }}</h2>
        <p class="text-gray-600">Idade: {{ $candidato->idade }}</p>
        <p class="text-gray-600">Skills: {{ $candidato->skills }}</p>
        <p class="text-gray-600">Experiências: {{ $candidato->experiencias }}</p>
        <p class="text-gray-600">Trabalhos anteriores: {{ $candidato->trabalhos }}</p>
        <p class="text-gray-600">Procurando: {{ $candidato->procurando }}</p>
        <a href="{{ route('candidatos.index') }}" class="block text-center mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg">Voltar</a>
    </div>
</body>
</html>
