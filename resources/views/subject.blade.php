@extends('layouts.master')

@section('title', 'Subjects')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gray-900 tracking-tight">
            <i class="ri-book-open-line mr-2"></i>Explore Our Subjects
        </h1>
        <p class="text-cyan-500 mt-4 max-w-2xl mx-auto text-lg">
            Discover a world of knowledge. Whether you're into science, literature, or the arts—our carefully curated subjects will spark your curiosity and fuel your learning journey.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @forelse($subjects as $subject)
        <div class="bg-gradient-to-br from-violet-600 via-indigo-500 to-cyan-400 text-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 text-center">
            <div class="text-5xl mb-4">
                <i class="ri-book-3-fill"></i>
            </div>
            <h2 class="text-2xl font-bold mb-2 uppercase tracking-wider">{{ $subject->name }}</h2>
            <p class="text-sm text-indigo-100 mb-2">
                <i class="ri-hashtag text-white"></i> Subject ID: {{ $subject->id }}
            </p>
            <p class="text-sm italic text-indigo-200 mb-4">"Unlock your potential with {{ $subject->name }}"</p>

            <a href="{{ route('subjects.teachers', $subject->id) }}"
            class="inline-block bg-white text-indigo-600 hover:text-white hover:bg-indigo-600 border border-white px-4 py-2 rounded-full text-sm font-semibold transition duration-300">
                <i class="ri-user-search-line mr-1"></i> View Teachers
            </a>
        </div>
        @empty
        <div class="col-span-full text-center text-gray-400 text-lg">
            <i class="ri-emotion-sad-line text-4xl mb-2"></i>
            <p>No subjects available at the moment. Please check back later!</p>
        </div>
        @endforelse
    </div>

    <div class="mt-16 text-center text-sm text-gray-500">
        <i class="ri-lightbulb-flash-line text-yellow-400 text-xl mr-1"></i>
        Keep learning. Keep growing. Knowledge is power!
    </div>
</div>
@endsection
