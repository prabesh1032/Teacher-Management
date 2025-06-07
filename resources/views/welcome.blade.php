@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<div class="max-w-4xl mx-auto text-center py-20 px-6">
    <h1 class="text-5xl font-extrabold text-indigo-700 mb-6">Welcome to Teacher Management</h1>
    <p class="text-lg text-gray-700 mb-10">Easily manage your teachers and subjects all in one place. Simplify your administrative tasks and focus on what matters most — education.</p>

    <div class="space-x-4">
        <a href="{{ route('teacher.show') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-indigo-700 transition duration-300">
            View Teachers
        </a>
        <a href="{{ route('subjects.show') }}" class="inline-block border-2 border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-indigo-600 hover:text-white transition duration-300">
            View Subjects
        </a>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
            <i class="ri-user-line text-indigo-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Manage Teachers</h3>
            <p>Keep track of all your teachers’ details including their subjects, contact info, and photos.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
            <i class="ri-book-line text-indigo-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Organize Subjects</h3>
            <p>Assign subjects to teachers and keep your curriculum structured and easy to manage.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
            <i class="ri-dashboard-line text-indigo-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Dashboard Overview</h3>
            <p>Quickly see important stats and updates on your teachers and subjects from the dashboard.</p>
        </div>
    </div>
</div>
@endsection
