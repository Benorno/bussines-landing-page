@extends('index')

@section('title', 'Reflection | Services Create')

@section('content')
    <header>
        @include('admin.header')
    </header>

    <main class="mt-5">
        <div class="container">
            <h1>Create Service</h1>
            <form method="POST" action="{{ route('services.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <label for="price" class="form-label">Price Range</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <input type="text" class="form-control" id="price" name="price" placeholder="xx - xx" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description" required style="resize: none"></textarea>
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Details</label>
                    <textarea class="form-control" id="details" rows="5" name="details" required style="resize: none"></textarea>
                </div>
                <button type="submit" class="btn border-2 rounded-pill btn-outline-success">Create</button>
            </form>
        </div>
    </main>

@endsection
