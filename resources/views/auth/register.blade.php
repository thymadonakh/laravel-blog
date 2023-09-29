<x-layout>    
    @section('title', 'Register')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-6">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror">
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="block text-gray-600">Username</label>
                <input type="text" id="username" name="username" placeholder="username" value="{{ old('username') }}" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('username') border-red-500 @enderror">
                @error('username')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
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
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-600">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Password"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">Register</button>
            @if ($errors->any())
                @foreach($errors->all() as $error)
                    <ul>
                        <li class="text-red-500 text-xs">{{ $error}}</li>
                    </ul>
                @endforeach
            @endif
        </form>
    </div>
</x-layout>


