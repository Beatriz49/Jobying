@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-6">
    <form method="GET" action="{{ route('jobs.index') }}" class="flex flex-col md:flex-row gap-4 bg-white p-4 rounded-xl shadow">
        <input type="text" name="keyword" value="{{ $filters['keyword'] ?? '' }}" placeholder="Job title or keyword"
            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="text" name="location" value="{{ $filters['location'] ?? '' }}" placeholder="Location"
            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <select name="category"
            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">All Categories</option>
            <option value="engineering" @if(($filters['category'] ?? '') == 'engineering') selected @endif>Engineering</option>
            <option value="marketing" @if(($filters['category'] ?? '') == 'marketing') selected @endif>Marketing</option>
        </select>
        <button type="submit"
            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Search</button>
    </form>

    <div class="mt-6 space-y-4">
        @forelse($jobs as $job)
            <div class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-800">{{ $job['title'] }}</h3>
                <p class="text-gray-600">{{ $job['company'] }} – {{ $job['location'] }}</p>
                <p class="text-sm text-blue-500">Category: {{ ucfirst($job['category']) }}</p>
                <button class="mt-2 px-4 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">Apply</button>
            </div>
        @empty
            <p class="text-gray-500">No jobs found.</p>
        @endforelse
    </div>
</div>
@endsection
