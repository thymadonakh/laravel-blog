<nav class="bg-gray-800 text-white">
    <div class="container mx-auto flex items-center justify-between p-4">
        <ul class="flex space-x-10">
            <li><a href="/" class="hover:text-blue-500">Home</a></li>
        @guest
            <!-- <li><a href="/register" class="hover:text-blue-500">Register</a></li> -->
            <li><a href="/login" class="hover:text-blue-500">Login</a></li>
        </ul>
        @endguest
        @auth
        <ul class="flex space-x-4">
            <!-- <li><a href="#" class="hover:text-blue-500">Welcome {{ auth()->user()->name }}!</a></li> -->
            @if (auth()->user()->isAdmin === 1)
            <li><a href="/admin/posts/create" class="hover:text-blue-500">Create Post</a></li>
            @endif
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-blue-500">Logout</button>
                </form>
            </li>
        </ul>
        @endauth
    </div>
 </nav>