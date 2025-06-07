@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">

    <h1 class="text-3xl font-bold mb-6">Teacher Management Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

        <!-- Total Teachers Card -->
        <div class="bg-blue-600 text-white rounded-lg shadow-lg p-6 flex flex-col items-center justify-center">
            <h2 class="text-xl font-semibold mb-2">Total Teachers</h2>
            <p class="text-4xl font-bold">5</p>
        </div>

        <!-- Total Subjects Card -->
        <div class="bg-green-600 text-white rounded-lg shadow-lg p-6 flex flex-col items-center justify-center">
            <h2 class="text-xl font-semibold mb-2">Total Subjects</h2>
            <p class="text-4xl font-bold">4</p>
        </div>
    </div>

    <div class="space-x-4">
        <a href="{{ route('teachers.index') }}" class="bg-blue-500 text-white px-5 py-3 rounded hover:bg-blue-600 transition">
            Manage Teachers
        </a>

        <a href="{{ route('subjects.index') }}" class="bg-green-500 text-white px-5 py-3 rounded hover:bg-green-600 transition">
            Manage Subjects
        </a>
    </div>

</div>
@endsection
