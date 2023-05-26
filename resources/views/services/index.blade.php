@extends('index')

@section('title', 'Reflections | Services')

@section('content')
    <header>
        @include('header')
    </header>

    <main>
        @include('services.main')
    </main>

    <footer>
        @include('footer')
    </footer>
@endsection
