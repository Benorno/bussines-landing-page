<div class="container-fluid p-4 rounded-bottom-5">
    <div class="row">
        <div class="col-3">
            <a href="/"><img src="{{ asset('img/logo.png') }}" alt="webiste logo" style="width: 200px"></a>
        </div>
        <div class="col d-none d-lg-block">
            <div class="float-end">
                <a href="{{ route('services') }}" class="btn btn-outline-dark border-2 rounded-pill">Services</a>
                <a href="{{ route('partner') }}" class="btn btn-outline-dark border-2 rounded-pill">Partners</a>
                <a href="{{ route('appointment') }}" class="btn btn-outline-success border-2 rounded-pill">Appointment</a>
            </div>
        </div>
        <div class="col d-block d-lg-none">
            <nav class="navbar float-end">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="filter: opacity(85%)">
                        <div class="offcanvas-body">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 mt-5 text-center">
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark border-2 rounded-pill" href="/">Home</a>
                                </li>
                                <li class="nav-item my-4">
                                    <a href="{{ route('services') }}" class="btn btn-outline-dark border-2 rounded-pill">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('partner') }}" class="btn btn-outline-dark border-2 rounded-pill">Partners</a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a href="{{ route('appointment') }}" class="btn btn-outline-success border-2 rounded-pill">Appointment</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
