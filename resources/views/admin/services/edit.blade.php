@extends('index')

@section('title', 'Reflection | Services Edit')

@section('content')
    <header>
        @include('admin.header')
    </header>

    <main>
        <div class="container">
            <h1>Edit Service</h1>
            <form action="{{ route('services.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="service_name">Service Name</label>
                    <input type="text" class="form-control" id="service_name" name="service_name" value="{{ $service->service_name }}" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">€</span>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $service->price }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ $service->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea class="form-control" id="details" name="details" rows="4" required>{{ $service->details }}</textarea>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-node-plus"></i> Update</button>
                    <a href="{{ route('services.list') }}" class="btn btn-secondary mx-2"><i class="bi bi-x-circle"></i> Cancel</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i> Delete</button>
                </div>
            </form>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete <b>"{{ $service->service_name }}"</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete "{{ $service->service_name }}" service?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> No</button>
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
