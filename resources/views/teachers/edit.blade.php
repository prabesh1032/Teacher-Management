@extends('layouts.app')

@section('title', 'Edit Teacher')

@section('content')
<form action="{{ route('teachers.update', $teacher->id) }}" class="mt-5" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-5">
        <select name="subject_id" class="p-3 w-full rounded-lg">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}"
                    @if($teacher->subject_id == $subject->id) selected @endif
                >{{ $subject->name }}</option>
            @endforeach
        </select>
        @error('subject_id')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <input type="text" placeholder="Enter Teacher Name"
               class="p-3 w-full rounded-lg" name="name" value="{{ $teacher->name }}">
        @error('name')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <input type="email" placeholder="Enter Teacher Email"
               class="p-3 w-full rounded-lg" name="email" value="{{ $teacher->email }}">
        @error('email')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <p>Current Photo</p>
    <img src="{{ asset('images/teachers/' . $teacher->photopath) }}" alt="Teacher Photo" class="h-44 mb-5">

    <div class="mb-5">
        <input type="file" class="p-3 w-full rounded-lg" name="photo">
        @error('photo')
            <div class="text-red-600 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-600 text-white py-3 px-5 rounded-md font-bold">Update Teacher</button>
        <a href="{{ route('teachers.index') }}" class="bg-lime-500 text-white py-3 px-5 rounded-md font-bold ml-3">Cancel</a>
    </div>
</form>
@endsection
