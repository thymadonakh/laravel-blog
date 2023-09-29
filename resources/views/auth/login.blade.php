<x-layout>
    @section('title', 'Login')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-6">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">Login</button>
        </form>
        <div class="mt-4 text-center">
            <p>Don't have an account? <a href="/register" class="text-blue-500 hover:underline">Register here</a></p>
        </div>
    </div>
</x-layout>
