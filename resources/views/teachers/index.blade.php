@extends('layouts.app')

@section('title') Teachers @endsection

@section('content')
<div class="text-right my-5">
    <a href="{{ route('teachers.create') }}" class="bg-blue-600 text-white py-3 px-6 rounded-md font-semibold shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
        <i class="ri-add-line text-xl mr-2"></i> <span class="text-lg">Add Teacher</span>
    </a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
    @foreach($teachers as $teacher)
    <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105 max-w-xs mx-auto">
        <div class="text-center">
            <!-- Teacher Photo -->
            <img src="{{ asset('images/teachers/' . $teacher->photopath) }}" alt="{{ $teacher->name }}" class="w-full h-32 object-cover rounded-lg mb-4">

            <!-- Teacher Details -->
            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $teacher->name }}</h2>

            <!-- Email with Icon -->
            <div class="flex items-center justify-center space-x-2 mb-2">
                <i class="ri-mail-line text-2xl text-purple-600"></i>
                <p class="text-md text-gray-600">{{ $teacher->email }}</p>
            </div>

            <!-- Subject with Icon -->
            <div class="flex items-center justify-center space-x-2 mb-4">
                <i class="ri-book-line text-2xl text-green-600"></i>
                <p class="text-sm text-gray-600">Subject: <span class="text-green-600">{{ $teacher->subject ? $teacher->subject->name : 'No Subject' }}</span></p>
            </div>

            <!-- Action Buttons with Hover Effects -->
            <div class="flex justify-center space-x-4">
                <a href="{{ route('teachers.edit', $teacher->id) }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-indigo-700 transition duration-300 flex items-center space-x-2 hover:scale-105">
                    <i class="ri-pencil-line text-lg"></i>
                    <span class="text-lg">Edit</span>
                </a>
                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-300 flex items-center space-x-2 hover:scale-105">
                        <i class="ri-delete-bin-5-line text-lg"></i>
                        <span class="text-lg">Delete</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
