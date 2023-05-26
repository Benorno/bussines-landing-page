@extends('index')

@section('title', 'Reflections | Partners')

@section('content')
    <header>
        @include('header')
    </header>

    <main>
        @include('partner.main')
    </main>

    <footer>
        @include('footer')
    </footer>
@endsection
