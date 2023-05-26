@extends('index')

@section('title', 'Reflections | Admin')

@section('content')
    <header>
        @include('admin.header')
    </header>

    @if ($appointments->isEmpty())
        <h1>Appointments</h1>
        <p>No appointments found.</p>
    @else
    <main>
        <h1>Appointments</h1>
        @include('admin.main')
    </main>
    @endif

@endsection

