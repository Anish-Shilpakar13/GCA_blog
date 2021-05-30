@extends('layouts.main')
@section('title','All Blogs')

@section('header')
    @include('partials._header')
@endsection

@section('content')
{{-- some php for layout of posts --}}
    <?php 
        $singlePost = $posts[0];
        $twoPosts = [];
        $threePosts = [];
        // $twoPosts = [$posts[1],$posts[2]]; 
        for($i=1;$i<count($posts);$i++){
            if($i < 5){
                array_push($twoPosts,$posts[$i]);
            }else{
                array_push($threePosts,$posts[$i]);
            }
        }
    ?> 
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        {{-- single large post --}}
        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5 lg:flex">
                <div class="flex-1 lg:mr-8">
                    <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">
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
                                <a href={{ route('post.single',$singlePost->id) }}>{{ $singlePost->title }}</a>
                            </h1>
                            <span class="mt-2 block text-green-400 text-sm"><a href={{ route('category.single',$singlePost->category->id) }}>Category: {{ $singlePost->category->name }}</a></span>
                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>{{ date('F j, Y',strtotime($singlePost->created_at)) }}</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-sm mt-2">
                        <p>
                            {{ Str::substr($singlePost->body, 0, 150) }}{{ strlen($singlePost->body) > 150 ? "...":"" }}
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

                        <div class="hidden lg:block">
                            <a href={{ route('post.single',$singlePost->id) }}
                                class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read
                                More</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        
        {{-- two smaller posts --}}
        <div class="lg:grid lg:grid-cols-2">
            @foreach ($twoPosts as $post)            
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
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
                                    <span class="mt-2 block text-green-400 text-sm"><a href={{ route('category.single',$post->category->id) }}>Category: {{ $post->category->name }}</a></span>
                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ date('F j, Y',strtotime($post->created_at)) }}</time>
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
                                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                        Read More
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            @endforeach


        </div>
        {{-- three smaller posts --}}
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($threePosts as $post)
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
                                    <span class="mt-2 block text-green-400 text-sm"><a href={{ route('category.single',$post->category->id) }}>Category: {{ $post->category->name }}</a></span>
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