<x-guestLayout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h1>
                <p class="text-gray-600 mb-6">Here is your personalized dashboard.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Profile Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold mb-2">Your Profile</h3>
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Joined:</strong> {{ Auth::user()->created_at->format('F d, Y') }}</p>
                    </div>

                    <!-- Placeholder for Additional Content -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
                        <ul class="list-disc list-inside">
                            <li><a href="#" class="text-blue-500 hover:underline">Update Profile</a></li>
                            <li><a href="{{ route('notifications.index') }}" class="text-blue-500 hover:underline">View Notifications</a></li>

                        </ul>
                    </div>
                </div>

                <!-- Additional Section -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold mb-2">Recent Activity</h3>
                    <p class="text-gray-600">No recent activity to display.</p>
                </div>
            </div>
            <div class="mt-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guestLayout>
