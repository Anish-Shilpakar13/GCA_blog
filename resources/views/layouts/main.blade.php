<!doctype html>

<head>
    @include('partials._head')
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        {{-- navbar --}}
        @include('partials._navbar')
        {{-- header part --}}
        @yield('header')
        {{-- main body --}}
        @yield('content')
        {{-- footer  --}}
        @include('partials._footer')
    </section>
</body>
