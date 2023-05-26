<div class="container-fluid bg-dark text-light rounded-bottom-5">
    <div class="container">
        <div class="row py-3">
            <div class="col-7">
                <h2><b>Admin Panel</b></h2>
            </div>
            <div class="col">
                <div class="float-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-light rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('services.list') }}"><i class="bi bi-card-list"></i> See Services</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.create') }}"><i class="bi bi-plus-circle"></i> Create Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <a href="{{ route('admin.index') }}" role="button" class="btn btn-outline-light rounded-pill"><i class="bi bi-car-front"></i> Appointments</a>
                </div>
            </div>
        </div>
    </div>
</div>
