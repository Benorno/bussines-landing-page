@extends('index')

@section('title', 'Reflections | Services List')

@section('content')
    <header>
        @include('admin.header')
    </header>

    @if($services->isEmpty())
        <div class="p-5">
            <h1><i class="bi bi-card-list"></i> Services</h1>
            <p>No services created. <a href="{{ route('services.create') }}" class="btn btn-sm mt-3 btn-outline-primary border-2 rounded-pill mb-3">
                    <i class="bi bi-plus-circle"></i> Create Service</a>
            </p>
        </div>

    @else
    <main>
        <div class="container-fluid p-5">
            <h1><i class="bi bi-card-list"></i> Services</h1>
            <a href="{{ route('services.create') }}" class="btn btn-outline-primary border-2 rounded-pill mb-3"><i class="bi bi-plus-circle"></i>
                Create Service</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="col-sm-2">Name</th>
                    <th class="col-sm-1">Price Range</th>
                    <th class="col-sm-4">Description</th>
                    <th class="col-sm-4">Details</th>
                    <th class="col-sm-1">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->service_name }}</td>
                        <td>€{{ $service->price }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->details }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn border-2 rounded-pill btn-outline-secondary "><i
                                    class="bi bi-pencil"></i> Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>

    @endif

@endsection
