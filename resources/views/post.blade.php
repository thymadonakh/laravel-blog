<x-layout>
        <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://picsum.photos/400/200?random=1" alt="{{$post->title}}" class="h-40 object-cover mb-4 rounded">
                <h2 class="text-xl font-semibold">{{$post->title}}</h2>
                <p class="text-gray-500">Published on {{$post->created_at->diffForHumans()}}</p>
                <p class="text-gray-500">by {{ $post->author}}</p>
                <p class="mt-2">{{$post->body}}</p>
        </div>
</x-layout>