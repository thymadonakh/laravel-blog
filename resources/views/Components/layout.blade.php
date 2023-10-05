<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="/">
                <img src="https://img.logoipsum.com/283.svg" alt="logo">
                <p class="text-sm pt-4">Exploring the world through words</p>
            </a>
        </div>
    </header>

    <!-- Navigation -->
    @include('components.nav')

    <!-- Main Content -->
    <div class="flex-grow">

        {{ $slot }}

    </div>

    <!-- Flash message when login -->
    @if (session()->has('success'))
        <div x-data="{ show: true }"
            x-init="setTimeout (() = show = false, 4000)"
            x-show="show"
            class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
            >
                <p>{{ session('success') }}</p>
        </div>
    @endif

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-8">
        <div class="container mx-auto py-4 text-center">
            &copy; 2023 My Blog. All rights reserved.
        </div>
    </footer>
</body>
</html>

