<x-guestLayout>
<h1 class="text-4xl">Upload de imagens</h1>
<form method="POST" action="/images" enctype="multipart/form-data">
    @csrf
    <div class="space-y-4">
        <div>
            <x-label>Nome</x-label>
            <x-input type="text" name="name" id="name"/>
            @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>Imagem</x-label>
            <x-input type="file" name="image" id="image"/>
            @error('image')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>teste</x-label>
            <x-input type="teste" name="teste" id="teste"/>
            @error('teste')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>skills</x-label>
            <x-input type="skills" name="skills" id="skills"/>
            @error('skills')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>procurando</x-label>
            <x-input type="procurando" name="procurando" id="procurando"/>
            @error('procurando')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>experiencias</x-label>
            <x-input type="experiencias" name="experiencias" id="experiencias"/>
            @error('experiencias')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>trabalhos</x-label>
            <x-input type="trabalhos" name="trabalhos" id="trabalhos"/>
            @error('trabalhos')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>idade</x-label>
            <x-input type="idade" name="idade" id="idade"/>
            @error('idade')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>



        <x-button>Upload</x-button>

    </div>

</form>
</x-guestLayout>
