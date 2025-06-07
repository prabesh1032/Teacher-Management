@extends('layouts.master')

@section('title', 'Teachers for ' . $subject->name)

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-cyan-400 text-center mb-10">
        <i class="ri-user-voice-fill"></i> Teachers for {{ $subject->name }}
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @forelse($teachers as $teacher)
        <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md text-center hover:shadow-xl transition duration-300">
            <img src="{{ asset('images/teachers/' . $teacher->photopath) }}" alt="{{ $teacher->name }}"
                class="w-28 h-28 mx-auto rounded-full object-cover mb-4 border-4 border-cyan-400">
            <h2 class="text-xl font-semibold">{{ $teacher->name }}</h2>
            <p class="text-sm text-gray-500">{{ $teacher->email }}</p>
        </div>
        @empty
        <p class="col-span-full text-center text-gray-400 text-lg">No teachers found for this subject.</p>
        @endforelse
    </div>
</div>
@endsection
