<div class="container" style="margin-top: 10svh; margin-bottom: 30svh">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('appointments.store') }}">
                @csrf
                <h2><i class="bi bi-person-vcard"></i> Appointment Registration</h2>
                <div class="row mt-5">
                    <div class="col-sm-3 mb-3">
                        <label for="full_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="appointment_date" class="form-label">Available Date</label>
                        <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" required>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-3 mb-3">
                        <label for="car_brand" class="form-label">Car Brand</label>
                        <select class="form-select" id="car_brand" name="car_brand" required>
                            <option value="">Select Car Brand</option>
                            <option value="Acura">Acura</option>
                            <option value="Alfa Romeo">Alfa Romeo</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Buick">Buick</option>
                            <option value="Cadillac">Cadillac</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Chrysler">Chrysler</option>
                            <option value="Dodge">Dodge</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Ford">Ford</option>
                            <option value="Genesis">Genesis</option>
                            <option value="GMC">GMC</option>
                            <option value="Honda">Honda</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Infiniti">Infiniti</option>
                            <option value="Jaguar">Jaguar</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Kia">Kia</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Lincoln">Lincoln</option>
                            <option value="Maserati">Maserati</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                            <option value="Mini">Mini</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Porsche">Porsche</option>
                            <option value="Ram">Ram</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Tesla">Tesla</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Volvo">Volvo</option>
                        </select>

                    </div>
                    <div class="col-3 mb-3">
                        <label for="car_model" class="form-label">Car Model</label>
                        <input type="text" class="form-control" id="car_model" name="car_model" required>
                    </div>
                    <div class="col-3 mb-3">
                        <label for="licence" class="form-label">Licence Plate</label>
                        <input type="text" class="form-control" id="licence" name="licence" required>
                    </div>
                    <div class="col-3 mb-3">
                        <label for="service" class="form-label">Service</label>
                        <select class="form-select" id="service" name="service" required>
                            <option value="">Select a Service</option>
                            @foreach ($appointmentServices as $service)
                                <option value="{{ $service->service_name }}">{{ $service->service_name }} - €{{ $service->price }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
