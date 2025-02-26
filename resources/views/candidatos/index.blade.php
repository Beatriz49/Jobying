
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Candidatos</title>
    <script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6">Lista de Candidatos</h1>

        @foreach($candidatos as $candidato)
            <div class="bg-gray-200 p-4 rounded-lg flex items-center mb-4">
                <img src="{{ $candidato->foto }}" alt="Foto de {{ $candidato->nome }}" class="w-16 h-16 rounded-full object-cover mr-4">
                <div>
                    <h2 class="text-xl font-semibold">{{ $candidato->nome }}</h2>
                    <p class="text-gray-700"><strong>Skills:</strong> {{ $candidato->skills }}</p>
                    <p class="text-gray-700"><strong>Experiências:</strong> {{ $candidato->experiencias }}</p>
                </div>
            </div>
        @endforeach
    </div>
