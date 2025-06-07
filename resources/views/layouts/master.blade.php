<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Teacher Management')</title>

    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-indigo-700 shadow-md py-4 px-6 flex justify-between items-center sticky top-0 z-50">
        <div class="text-3xl font-extrabold text-white tracking-wide">
            <a href="/">🎓 Teacher Management</a>
        </div>

        <nav class="hidden md:flex space-x-6 text-lg font-semibold text-white">
            <a href="{{route('dashboard')}}" class="hover:text-indigo-300 transition duration-300">Dashboard</a>
            <a href="{{ route('teacher.show') }}" class="hover:text-indigo-300 transition duration-300">Teachers</a>
            <a href="{{route('subjects.show')}}" class="hover:text-indigo-300 transition duration-300">Subjects</a>
        </nav>

        <div class="flex items-center space-x-5 text-white">
            @auth
                <span class="font-bold text-lg flex items-center space-x-2">
                    <i class="ri-user-3-fill"></i>
                    <span>{{ auth()->user()->name }}</span>
                </span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded text-sm font-semibold transition">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded text-sm font-semibold transition">Login</a>
                <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded text-sm font-semibold transition">Register</a>
            @endauth
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-10 px-6 md:px-16 min-h-[80vh]">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-indigo-700 text-indigo-200 pt-10 pb-6 mt-10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-6">
            <!-- Branding -->
            <div>
                <h2 class="text-3xl font-extrabold flex items-center space-x-2">
                    <span>🎓</span>
                    <span>Teacher Management</span>
                </h2>
                <p class="mt-3 text-sm text-indigo-200">Manage your teachers and subjects efficiently and easily.</p>
            </div>

            <!-- Support -->
            <div>
                <h2 class="text-xl font-bold mb-4">Support</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-indigo-300"><i class="ri-question-line mr-2"></i>FAQs</a></li>
                    <li><a href="#" class="hover:text-indigo-300"><i class="ri-service-line mr-2"></i>Help Center</a></li>
                    <li><a href="#" class="hover:text-indigo-300"><i class="ri-close-circle-line mr-2"></i>Contact Support</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h2 class="text-xl font-bold mb-4">Connect With Us</h2>
                <div class="flex space-x-4 text-2xl">
                    <a href="https://facebook.com/prabesh.ach" class="text-blue-500 hover:text-blue-400"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="https://twitter.com/PrabeshAch33319" class="text-sky-400 hover:text-sky-300"><i class="ri-twitter-fill"></i></a>
                    <a href="https://instagram.com/prabesh_ach" class="text-pink-500 hover:text-pink-400"><i class="ri-instagram-fill"></i></a>
                    <a href="mailto:prabesh11100@gmail.com" class="text-amber-400 hover:text-amber-300"><i class="ri-mail-fill"></i></a>
                    <a href="tel:+9779812965110" class="text-green-400 hover:text-green-300"><i class="ri-phone-fill"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center text-sm text-indigo-300 mt-10 border-t border-indigo-600 pt-4">
            &copy; 2025 Teacher Management. All rights reserved.
        </div>
    </footer>

</body>
</html>
