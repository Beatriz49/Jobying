<x-guest-layout>
    <img src="/img/{{ $image->path }}" class="mx-auto rounded-full" width="200" height="100" />
    <h1 class="text-center">{{ $image->name }}</h1>
    <p class="text-center">{{ $image->description }}</p>
</x-guest-layout>
