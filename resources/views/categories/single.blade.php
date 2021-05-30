@extends('layouts.main')

@section('title',$category->title)

@section('content')
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href={{ route('category.index') }}
                        class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        All Categories
                    </a>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $category->name }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">
                    {{ $category->description }}
                </div>
            </div>
        </article>
        <h1 class="text-center text-5xl">Posts In {{ $category->name }} ({{ count($posts) }})</h1>
        {{-- three smaller posts --}}
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($posts as $post)
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">Techniques</a>
                                    <a href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <a href={{ route('post.single',$post->id) }}>
                                        {{ $post->title }}
                                        </a>
                                    </h1>
                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{  date('F j, Y',strtotime($post->created_at))  }}</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    {{ Str::substr($post->body, 0, 150) }}{{ strlen($post->body) > 150 ? "...":"" }}
                                </p>

                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href={{ route('post.single',$post->id) }}
                                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </main>
@endsection