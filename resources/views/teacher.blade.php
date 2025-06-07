@extends('layouts.master')

@section('title', 'Our Teachers')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-12 tracking-wide">
        <i class="ri-team-line mr-2"></i>Meet Our Teachers
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        @forelse($teacher as $t)
        <div class="bg-gray-100 text-gray-800 p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 text-center">
            <div class="relative">
                <img src="{{ asset('images/teachers/' . $t->photopath) }}" alt="{{ $t->name }}"
                    class="w-32 h-32 mx-auto rounded-full object-cover mb-4 border-4 border-cyan-500 shadow">
                <div class="absolute top-2 right-2 text-cyan-500 text-xl">
                    <i class="ri-user-star-fill"></i>
                </div>
            </div>
            <h2 class="text-xl font-bold">{{ $t->name }}</h2>
            <p class="text-sm text-gray-600 flex items-center justify-center gap-1">
                <i class="ri-mail-line text-cyan-400"></i> {{ $t->email }}
            </p>
            <p class="mt-3">
                <span class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 text-sm font-semibold px-3 py-1 rounded-full shadow-sm">
                    <i class="ri-book-2-line text-lg"></i>
                    {{ $t->subject->name ?? 'No Subject Assigned' }}
                </span>
            </p>
        </div>
        @empty
        <div class="col-span-full text-center text-gray-400 text-lg">
            <i class="ri-emotion-sad-line text-3xl mb-2"></i>
            <p>No teachers found at the moment.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
