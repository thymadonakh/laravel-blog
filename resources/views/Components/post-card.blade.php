@props(['post'])
<div class="bg-white p-4 shadow-lg rounded-lg">
    <img src="https://picsum.photos/400/200?random={{$post->id}}" alt="{{$post->title}}" class="w-full h-40 object-cover mb-4 rounded">
    <h2 class="text-xl font-semibold">{{$post->title}}</h2>
    <p class="text-gray-500">Published on {{$post->created_at->diffForHumans()}}</p>
    <p class="mt-2">{{$post->excerpt}}</p>
    <a href="/posts/{{$post->slug}}" class="mt-4 text-blue-500 hover:underline">Read more</a>
</div>

