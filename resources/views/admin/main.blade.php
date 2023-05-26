<div class="container-fluid">
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
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->car_brand }}</td>
                    <td>{{ $appointment->car_model }}</td>
                    <td>{{ $appointment->licence }}</td>
                    <td>{{ $appointment->service }}</td>
                    <td class="text-warning" style="text-transform: uppercase"><b>{{ $appointment->status }}</b></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form method="POST" action="{{ route('admin.appointments.markAsDone', $appointment) }}" class="d-inline">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-outline-success rounded-pill">Mark as Done</button>
                            </form>
                            <form method="POST" action="{{ route('admin.appointments.markAsCanceled', $appointment) }}" class="d-inline mx-3">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger rounded-pill">Mark as Canceled</button>
                            </form>
                            <form method="POST" action="{{ route('admin.appointments.markAsPending', $appointment) }}" class="d-inline">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary rounded-pill">Mark as Pending</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
