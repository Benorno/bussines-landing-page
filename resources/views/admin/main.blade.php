<div class="container-fluid">
    <div class="row my-5">
        <div class="col"></div>
        <div class="col-8">
            <form class="d-flex" role="search" action="{{ route('admin.appointments.search') }}" method="GET">
                <input class="form-control me-2" type="search" name="licence" placeholder="Search by licence plate" aria-label="Search">
                <button class="btn btn-outline-success rounded-pill" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Car Brand</th>
                <th>Car Model</th>
                <th>Licence</th>
                <th>Service</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->full_name }}</td>
                    <td><a href="mailto:{{ $appointment->email }}">{{ $appointment->email }}</a></td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->car_brand }}</td>
                    <td>{{ $appointment->car_model }}</td>
                    <td>{{ $appointment->licence }}</td>
                    <td>{{ $appointment->service }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    @if($appointment->status === "pending")
                        <td class="text-warning" style="text-transform: uppercase"><b>{{ $appointment->status }}</b></td>
                    @elseif($appointment->status === "done")
                        <td class="text-success" style="text-transform: uppercase"><b>{{ $appointment->status }}</b></td>
                    @else
                        <td class="text-danger" style="text-transform: uppercase"><b>{{ $appointment->status }}</b></td>
                    @endif
                    <td>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle rounded-pill" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Change Status
                                </button>
                                <ul class="dropdown-menu text-center" aria-labelledby="statusDropdown">
                                    <li>
                                        <form method="POST" action="{{ route('admin.appointments.markAsDone', $appointment) }}" class="dropdown-item">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" class="btn btn-success rounded-pill">Mark as Done</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('admin.appointments.markAsCanceled', $appointment) }}" class="dropdown-item">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" class="btn btn-danger rounded-pill">Mark as Canceled</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('admin.appointments.markAsPending', $appointment) }}" class="dropdown-item">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" class="btn btn-secondary rounded-pill">Mark as Pending</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
