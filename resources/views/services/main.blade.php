<div class="container">
    <div class="row my-5">
        <h2><i class="bi bi-tag"></i> Services and Prices</h2>
    </div>

    @if($services->isEmpty())
        <div class="row">
            <h3 class="text-center">Sorry, currently we are not providing any services <i class="bi bi-emoji-frown"></i></h3>
        </div>

    @else
    <div class="row">
        <div class="col-12">
            <div class="accordion" id="accordionService">
                @foreach ($services as $service)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $service->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $service->id }}">
                                {{ $service->service_name }} - €{{ $service->price }}
                            </button>
                        </h2>
                        <div id="collapse{{ $service->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionService">
                            <div class="accordion-body">
                                <p>
                                    {{ $service->description }}
                                </p>
                                <p>
                                    {{ $service->details }}
                                </p>
                                <p>
                                    Price Range: €{{ $service->price }} (may vary based on vehicle size and condition)
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @endif

</div>
