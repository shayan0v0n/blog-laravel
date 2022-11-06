<header class="flex bg-[#1565c0] p-9 text-center">
    <div class="basis-1/3 ">
        <a href="/articles" class="bg-blue-900 rounded text-white px-9 py-5">Article</a>
    </div>
    <div class="basis-1/3 ">
        <a href="/" class="bg-blue-900 rounded text-white px-9 py-5">Home</a>
    </div>
    @auth
        <div class="basis-1/3 ">
            <a href="/admin" class="bg-blue-900 rounded text-white px-9 py-5">Admin</a>
        </div>
    @endauth
    @guest
        <div class="basis-1/3 ">
            <a href="/register" class="bg-red-900 rounded text-white px-9 py-5">Register</a>
        </div>
    @endguest
</header>