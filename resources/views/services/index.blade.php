@extends('index')

@section('title', 'Reflections | Services')

@section('content')
    <header>
        @include('header')
    </header>

    <main style="margin-bottom: 40svh">
        @include('services.main')
    </main>

    <footer>
        @include('footer')
    </footer>
@endsection
