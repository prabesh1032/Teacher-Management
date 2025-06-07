@extends('layouts.app')

@section('title') Edit Subject @endsection

@section('content')
<form action="{{ route('subjects.update', $subject->id) }}" method="POST" class="mt-5">
    @csrf
 @method('PUT')

    <!-- Subject Name -->
    <div class="mb-5">
        <input type="text" name="name" value="{{ old('name', $subject->name) }}"
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
        <input type="text" name="code" value="{{ old('code', $subject->code) }}"
               placeholder="Enter Subject Code"
               class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('code')
        <div class="text-red-600 mt-2 text-sm">
            *{{ $message }}
        </div>
        @enderror
    </div>

    <div class="flex justify-center">
        <button type="submit" class="bg-yellow-500 text-white py-3 px-5 rounded-md font-bold hover:bg-yellow-600 transition">
            Update Subject
        </button>
        <a href="{{ route('subjects.index') }}" class="bg-gray-500 text-white py-3 px-5 rounded-md font-bold ml-3 hover:bg-gray-600 transition">
            Cancel
        </a>
    </div>
</form>
@endsection
