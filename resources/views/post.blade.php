<x-layout>
        <div class="bg-white p-4 rounded-lg max-w-4xl mx-auto">
                <img src="https://picsum.photos/800/400?random=1" alt="{{ $post->title }}" class="w-full h-96 object-cover rounded mb-4">
                <div class="px-4">
                        <h2 class="text-3xl font-semibold">{{ $post->title }}</h2>
                        <p class="text-gray-500 mt-2">Published on {{ $post->created_at->diffForHumans() }} by <a href="/posts/author/{{ $post->user_id}}" class="text-blue-500">{{ $post->user->name }}</a></p>
                        <p class="mt-4">{{ $post->body }}</p>
                </div>
        </div>
</x-layout>