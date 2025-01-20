<x-guestlayout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            // Função para adicionar um novo candidato
            function addCandidate() {
                const container = document.getElementById('candidates');
                const name = prompt("Digite o nome do candidato:");
                const imageUrl = prompt("Digite a URL da imagem:");

                if (name && imageUrl) {
                    const candidateDiv = document.createElement('div');
                    candidateDiv.className = "flex flex-col items-center";

                    const img = document.createElement('img');
                    img.src = imageUrl;
                    img.alt = name;
                    img.className = "w-32 h-32 rounded-full object-cover mb-4";

                    const text = document.createElement('p');
                    text.className = "text-lg font-medium";
                    text.textContent = name;

                    candidateDiv.appendChild(img);
                    candidateDiv.appendChild(text);

                    container.appendChild(candidateDiv);
                } else {
                    alert("Nome e URL da imagem são obrigatórios!");
                }
            }
        </script>
    </head>
    <body class="font-sans leading-relaxed m-0 p-0 bg-gray-100">

        <header class="text-center py-6 bg-gray-200">
            <h1 class="text-2xl font-bold">Contactos</h1>
        </header>

        <section class="max-w-2xl mx-auto mt-32 p-14 bg-gray-200 rounded-2xl shadow-md">
            <h1 class="text-xl font-semibold mb-6">Nossos Candidatos</h1>
            <div id="candidates" class="flex flex-wrap gap-8 justify-center">
                <!-- Candidatos serão adicionados aqui -->
            </div>
            <button
                onclick="addCandidate()"
                class="mt-6 px-6 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">
                Adicionar Candidato
            </button>
        </section>

    </body>
</x-guestlayout>