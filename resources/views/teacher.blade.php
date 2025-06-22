@extends('layouts.master')

@section('title', 'Our Teaching Team')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Page Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">
            <i class="ri-team-line mr-3 text-cyan-500"></i>Meet Our Teaching Team
        </h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Our dedicated educators bring expertise, passion, and innovation to the classroom.
        </p>
    </div>

    

    <!-- Teachers Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse($teachers as $teacher)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <!-- Teacher Image -->
            <div class="relative">
                <img src="{{ asset('images/teachers/' . $teacher->photopath) }}" alt="{{ $teacher->name }}"
                    class="w-full h-48 object-cover">
                <div class="absolute top-3 right-3 bg-white p-2 rounded-full shadow-md">
                    <i class="ri-user-star-fill text-cyan-500 text-xl"></i>
                </div>
            </div>

            <!-- Teacher Info -->
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-1">{{ $teacher->name }}</h2>
                <p class="text-sm text-gray-600 mb-3 flex items-center">
                    <i class="ri-mail-line text-cyan-500 mr-2"></i> {{ $teacher->email }}
                </p>

                <div class="mb-4">
                    <span class="inline-block bg-cyan-100 text-cyan-800 text-xs px-3 py-1 rounded-full font-semibold mr-2">
                        {{ $teacher->subject->name ?? 'General' }}
                    </span>
                    @if($teacher->experience_years > 0)
                    <span class="inline-block bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full font-semibold">
                        {{ $teacher->experience_years }}+ years
                    </span>
                    @endif
                </div>

                <!-- Social Links -->
                <div class="flex justify-center space-x-4 text-gray-500">
                    <a href="#" class="hover:text-cyan-500 transition"><i class="ri-linkedin-box-fill text-xl"></i></a>
                    <a href="#" class="hover:text-cyan-500 transition"><i class="ri-twitter-fill text-xl"></i></a>
                    <a href="#" class="hover:text-cyan-500 transition"><i class="ri-global-line text-xl"></i></a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-16">
            <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <i class="ri-user-search-line text-3xl text-gray-400"></i>
            </div>
            <h3 class="text-xl font-medium text-gray-700 mb-2">No Teachers Found</h3>
            <p class="text-gray-500 max-w-md mx-auto">
                We currently don't have any teachers listed. Please check back later.
            </p>
        </div>
        @endforelse
    </div>
</div>
@endsection
