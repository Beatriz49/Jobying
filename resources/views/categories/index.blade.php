<x-guestLayout>

    @foreach ($categories as $category)
        <div class="border p-2 rounded">{{ $category->name }}</div>
    @endforeach

    <a class="hover:underline text-blue-900" href="/categories/create">
        <div class="border p-4 rounded bg-gray-100 text-black text-left-center">
            Criar nova categoria
        </div>
    </a>
</div>
</x-guestLayout>
