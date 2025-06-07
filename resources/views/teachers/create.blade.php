@extends('layouts.app')
@section('title') Create Teacher @endsection

@section('content')
<form action="{{ route('teachers.store') }}" class="mt-5" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-5">
        <select name="subject_id" class="p-3 w-full rounded-lg">
            <option value="" disabled selected>Select Subject</option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>
                    {{ $subject->name }}
                </option>
            @endforeach
        </select>
        @error('subject_id')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <input type="text"
               name="name"
               placeholder="Enter Teacher Name"
               class="p-3 w-full rounded-lg"
               value="{{ old('name') }}">
        @error('name')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <input type="email"
               name="email"
               placeholder="Enter Teacher Email"
               class="p-3 w-full rounded-lg"
               value="{{ old('email') }}">
        @error('email')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <input type="file"
               name="photo"
               class="p-3 w-full rounded-lg">
        @error('photo')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-600 text-white py-3 px-5 rounded-md font-bold">
            Add Teacher
        </button>
        <a href="{{ route('teachers.index') }}"
           class="bg-lime-500 text-white py-3 px-5 rounded-md font-bold ml-3">
           Cancel
        </a>
    </div>
</form>
@endsection
