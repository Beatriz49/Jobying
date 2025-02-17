<x-guestLayout>
    <form action="/candidatos/store" method="POST" enctype="multipart/form-data">
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
        <x-button>Criar</x-button>
    </form>

</x-guestLayout>
