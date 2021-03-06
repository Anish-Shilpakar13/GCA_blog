<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href={{ route('post.index') }}>
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0">
        <a href={{ route('post.index') }} class="text-xs font-bold uppercase">All Blogs</a>
        <a href={{ route('category.index') }} class="text-xs font-bold uppercase ml-3">All Categories</a>
        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>