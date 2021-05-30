@extends('layouts.main')
@section('title','All Categories')

@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <h1 class="text-center text-5xl">All Categories</h1>
        {{-- three smaller posts --}}
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($categories as $category)
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <a href={{ route('category.single',$category->id) }}>
                                        {{ $category->name }}
                                        </a>
                                    </h1>
                                    <span class="mt-2 block text-green-400 text-sm">No Of Posts: {{ count($category->posts) }}</span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    {{ $category->description }}
                                </p>

                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </main>
@endsection