<x-guestLayout>
    <section class="relative w-full h-screen m-0 p-0 overflow-hidden">
        <!-- Vídeo de Fundo -->
        <video autoplay muted loop class="absolute top-0 left-0  w-full h-full object-cover">
            <source src="/videos/video_exemplo.mp4" type="video/mp4" >
        </video>


        <!-- Conteúdo sobreposto -->
        <div class="relative flex flex-col justify-center items-center h-full bg-gray-900 bg-opacity-30">
            <h1 class="text-white text-center text-3xl lg:text-5xl font-semibold p-2 rounded">
                Descobre o teu novo emprego
            </h1>
            <form class="w-3/4 lg:w-1/2 mt-6 flex gap-2">
                <input type="text" class="border border-gray-400 w-full p-2 rounded text-xl" placeholder="Pesquisar" />
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded font-semibold hover:bg-blue-600">
                    Procurar
                </button>
            </form>
        </div>
    </section>
</x-guestLayout>
