@extends('index')

@section('title', 'Reflections | Admin')

@section('content')
    <header>
        @include('admin.header')
    </header>

    @if ($appointments->isEmpty())
        <div class="p-5">
            <h1><i class="bi bi-car-front"></i> Appointments</h1>
            <p>No appointments found.</p>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <form class="d-flex" role="search" action="{{ route('admin.appointments.search') }}" method="GET">
                    <input class="form-control me-2" type="search" name="licence" placeholder="Search by licence plate" aria-label="Search">
                    <button class="btn btn-outline-success rounded-pill" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    @else
    <main class="p-5">
        <h1><i class="bi bi-car-front"></i> Appointments</h1>
        @include('admin.main')
    </main>
    @endif

@endsection

