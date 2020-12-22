<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
    </head>
    <body>
        {{-- Header --}}
        @include('partials.header')

        {{-- Main --}}
        <main>
            <div class="container">
                @yield('main-content')
            </div>
        </main>

        {{-- Footer --}}
        @include('partials.footer')

        {{-- Script --}}
        @yield('script')
    </body>
</html>