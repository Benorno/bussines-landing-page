@extends('index')

@section('title', 'Reflections | Appointment')

@section('content')
    <header>
        @include('header')
    </header>

    <main>
        @include('appointment.main')
    </main>

    <footer>
        @include('footer')
    </footer>
@endsection
