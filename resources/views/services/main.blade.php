<div class="container">
    <div class="row my-5">
        <h2><i class="bi bi-tag"></i> Services and Prices</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="accordion" id="accordionService">
                @foreach ($services as $service)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $service->id }}" aria-expanded="false" aria-controls="collapse{{ $service->id }}">
                                {{ $service->name }} - €{{ $service->price }}
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
</div>
