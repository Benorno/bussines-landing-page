<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <h2><b>Admin Panel</b></h2>
        </div>
        <div class="col">
            <div class="float-end">
                <a href="{{ route('admin.index') }}" role="button" class="btn btn-outline-dark rounded-pill">Appointments</a>
                <div class="dropdown">
                    <button class="btn btn-outline-dark rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services.create') }}">Create Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.edit', ['service' => 1]) }}">Edit Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
