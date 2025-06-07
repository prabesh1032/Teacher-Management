<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>{{ config('app.name', 'TeacherManagement') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-inter antialiased bg-slate-100 text-gray-800">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-gray-900 text-white sticky top-0 px-4 py-6">
            <div class="flex items-center justify-center mb-10">
                <a href="" class="text-3xl font-extrabold flex items-center space-x-2 text-cyan-400">
                    <i class="ri-graduation-cap-line text-4xl"></i>
                    <span>TeacherMgmt</span>
                </a>
            </div>

            <nav class="space-y-2">
                <!-- Dashboard -->
                <a href="{{Route('dashboard')}}" class="flex items-center space-x-3 text-lg p-3 rounded-md hover:bg-cyan-500 hover:text-black">
                    <i class="ri-dashboard-line text-xl"></i>
                    <span>Dashboard</span>
                </a>
                <!-- Subjects -->
        <a href="{{Route('subjects.index')}}" class="flex items-center space-x-3 text-lg p-3 rounded-md hover:bg-cyan-500 hover:text-black">
                    <i class="ri-book-2-line text-xl"></i>
                    <span>Subjects</span>
                </a>

                <!-- Teachers -->
                <a href="{{Route('teachers.index')}}" class="flex items-center space-x-3 text-lg p-3 rounded-md hover:bg-cyan-500 hover:text-black">
                    <i class="ri-user-star-line text-xl"></i>
                    <span>Teachers</span>
                </a>


                <!-- Feedback -->
                <a href="" class="flex items-center space-x-3 text-lg p-3 rounded-md hover:bg-cyan-500 hover:text-black">
                    <i class="ri-feedback-line text-xl"></i>
                    <span>Feedback</span>
                </a>

                <!-- Logout -->
                <form action="{{ route('logout') }}" method="POST" class="pt-4">
                    @csrf
                    <button type="submit" class="flex items-center space-x-3 w-full p-3 rounded-md text-lg hover:bg-red-700 hover:text-white">
                        <i class="ri-logout-box-line text-xl"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <main class="flex-1 bg-slate-100 p-10 overflow-y-auto">
            <h1 class="text-4xl font-bold text-cyan-600">@yield('title')</h1>
            <hr class="my-5 border-t-4 border-cyan-300">
            @yield('content')
        </main>
    </div>

</body>

</html>
