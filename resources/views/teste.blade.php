<x-guestLayout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Lista de Candidatos</title>
    </head>
    <body class="bg-gray-100 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Candidatos</h1>
            <a href="/candidatos/create" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                Adicionar Candidato
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="candidato" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">
                <img src="https://via.placeholder.com/150" alt="Foto do Candidato" class="w-full h-48 object-cover rounded-md">
                <h2 class="text-xl font-semibold text-center mt-4 text-gray-900">João Silva</h2>
            </a>
        </div>
    </body>
    </html>
</x-guestLayout>
