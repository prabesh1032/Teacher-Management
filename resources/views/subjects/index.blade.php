@extends('layouts.app')

@section('title') Subjects @endsection

@section('content')
<div class="text-right my-5">
    <a href="{{ route('subjects.create') }}" class="bg-blue-600 text-white py-3 px-6 rounded-md font-semibold shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
        <i class="ri-add-line text-xl mr-2"></i> Add Subject
    </a>
</div>

<table class="mt-5 w-full table-auto rounded-lg overflow-hidden shadow-md">
    <thead>
        <tr class="bg-gradient-to-r from-purple-500 to-indigo-400 text-white">
            <th class="border p-4 text-lg">S.N.</th>
            <th class="border p-4 text-lg">Subject Name</th>
            <th class="border p-4 text-lg">Subject Code</th>
            <th class="border p-4 text-lg">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($subjects as $index => $subject)
        <tr class="text-center hover:bg-gray-50 transition duration-300">
            <td class="border p-4 text-lg">{{ $index + 1 }}</td>
            <td class="border p-4 text-lg font-medium text-gray-700">{{ $subject->name }}</td>
            <td class="border p-4 text-lg text-gray-600">{{ $subject->code }}</td>
            <td class="border p-4">
                <a href="{{ route('subjects.edit', $subject->id) }}"
                   class="bg-yellow-500 text-white px-4 py-2 rounded-lg transition duration-300 transform hover:scale-105 hover:bg-yellow-600">
                    <i class="ri-pencil-line text-xl mr-2"></i> Edit
                </a>
                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this subject?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg ml-2 transition duration-300 transform hover:scale-105 hover:bg-red-700">
                        <i class="ri-delete-bin-5-line text-xl mr-2"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center p-6 text-gray-500">No subjects found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
