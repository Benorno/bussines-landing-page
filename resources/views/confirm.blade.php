@extends('index')

@section('title', 'Reflections | Appointment Confirmed')

@section('content')
    <header>
        @include('header')
    </header>

    <main style="margin-bottom: 35svh; margin-top: 10svh">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col">
                    <img src="{{ asset('img/thank-you.jpg') }}" alt="thank you" style="width: 100%">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <h2 class="text-center text-success">Your appointment was received.</h2>
            </div>
        </div>
    </main>

    <footer>
        @include('footer')
    </footer>
@endsection
