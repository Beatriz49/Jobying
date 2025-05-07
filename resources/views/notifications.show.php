{{-- filepath: c:\Users\AEG1\Jobying\resources\views\notifications\show.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notification Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Notification</h1>

                <div class="mb-6">
                    <p class="text-gray-800 text-lg">
                        <strong>Message:</strong> {{ $notification->data['message'] ?? 'No message available' }}
                    </p>
                </div>

                @if(isset($notification->data['url']))
                    <div class="mb-6">
                        <a href="{{ $notification->data['url'] }}" class="text-blue-500 hover:underline">
                            View More Details
                        </a>
                    </div>
                @endif

                <div class="text-sm text-gray-500">
                    <p><strong>Received:</strong> {{ $notification->created_at->diffForHumans() }}</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('notifications.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                        Back to Notifications
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
