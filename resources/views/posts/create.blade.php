<x-layout>
    <div class="flex-grow p-8 flex items-center justify-center">
        <div class="bg-white p-8 shadow-md rounded-lg w-2/4">
            <h1 class="text-2xl font-semibold mb-4">Create a New Post</h1>
            <form action="/admin/posts/create" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="1">
                <div class="mb-4">
                    <label for="title" class="block text-gray-600">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="slug" class="block text-gray-600">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug') }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    @error('slug')
                    <p class="text-red-500 text-sm mt-1">{{ $message }} Please make Sure no space!</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="excerpt" class="block text-gray-600">Excerpt</label>
                    <textarea id="excerpt" name="excerpt" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="body" class="block text-gray-600">Body</label>
                    <textarea id="body" name="body" rows="6" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">{{ old('body') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">Create Post</button>
            </form>
        </div>
    </div>

</x-layout>