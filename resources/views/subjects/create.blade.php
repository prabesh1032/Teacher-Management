@extends('layouts.app')

@section('title') Create Subject @endsection

@section('content')
<form action="{{ route('subjects.store') }}" method="POST" class="mt-5">
    @csrf

    <!-- Subject Name -->
    <div class="mb-5">
        <input type="text" name="name" value="{{ old('name') }}"
               placeholder="Enter Subject Name"
               class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('name')
        <div class="text-red-600 mt-2 text-sm">
            *{{ $message }}
        </div>
        @enderror
    </div>

    <!-- Subject Code -->
    <div class="mb-5">
        <input type="text" name="code" value="{{ old('code') }}"
               placeholder="Enter Subject Code"
               class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('code')
        <div class="text-red-600 mt-2 text-sm">
            *{{ $message }}
        </div>
        @enderror
    </div>

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-600 text-white py-3 px-5 rounded-md font-bold hover:bg-blue-700 transition">
            Add Subject
        </button>
        <a href="{{ route('subjects.index') }}" class="bg-lime-500 text-white py-3 px-5 rounded-md font-bold ml-3 hover:bg-lime-600 transition">
            Cancel
        </a>
    </div>
</form>
@endsection
