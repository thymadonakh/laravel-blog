<x-layout>
    <main class="container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts->sortByDesc('created_at') as $post)
                <x-post-card :post="$post"/>
            @endforeach
        </div>
    </main>
</x-layout>