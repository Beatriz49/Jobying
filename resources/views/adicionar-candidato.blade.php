<x-guestLayout>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Adicionar Candidato</title>
    </head>
    <body class="bg-gray-100 p-8">
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-center mb-4">Adicionar Candidato</h1>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <label class="block mb-2 font-semibold">Nome</label>
                <input type="text" name="nome" class="w-full border border-gray-300 p-2 rounded-md mb-4" required>

                <label class="block mb-2 font-semibold">Idade</label>
                <input type="number" name="idade" class="w-full border border-gray-300 p-2 rounded-md mb-4" required>

                <label class="block mb-2 font-semibold">Foto</label>
                <input type="file" name="foto" accept="image/*" class="w-full border border-gray-300 p-2 rounded-md mb-4" required>

                <label class="block mb-2 font-semibold">Skills</label>
                <input type="text" name="skills" class="w-full border border-gray-300 p-2 rounded-md mb-4" required>

                <label class="block mb-2 font-semibold">Experiências</label>
                <textarea name="experiencias" class="w-full border border-gray-300 p-2 rounded-md mb-4" required></textarea>

                <label class="block mb-2 font-semibold">Trabalhos Anteriores</label>
                <textarea name="trabalhos" class="w-full border border-gray-300 p-2 rounded-md mb-4" required></textarea>

                <label class="block mb-2 font-semibold">O que procura?</label>
                <input type="text" name="procurando" class="w-full border border-gray-300 p-2 rounded-md mb-4" required>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Salvar</button>
            </form>

            <a href="teste" class="block mt-4 text-center text-blue-600 hover:underline">Voltar</a>
        </div>
    </body>
    </html>
</x-guestLayout>
