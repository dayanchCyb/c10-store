<div class="bg-white rounded shadow p-3 mb-3">
    <div class="row">
        <div class="col">
            <div class="h6">
                <span class="text-secondary">Brand</span>
                <a href="{{ route('home', ['brand_id' => $car->brand_id]) }}">
                    {{ $car->brand->name }}
                </a>
            </div>
            <div class="h6 mb-0">
                <span class="text-secondary">Color</span>
                <a href="{{ route('home', ['color_id' => $car->color_id]) }}">
                    {{ $car->color->name }}
                </a>
            </div>
        </div>
        <div class="col">
            <div class="h6">
                <span class="text-secondary">Year</span>
                <a href="{{ route('home', ['year_id' => $car->year_id]) }}">
                    {{ $car->year->name }}
                </a>
            </div>
            <div class="h6 mb-0">
                <span class="text-secondary">Location</span>
                <a href="{{ route('home', ['location_id' => $car->location_id]) }}">
                    {{ $car->location->name }}
                </a>
            </div>
        </div>
        <div class="col">
            <div class="h6">
                <span class="text-secondary">Phone</span>
                {{ $car->phone }}
            </div>
            <div class="h6 mb-0">
                <span class="text-secondary">Price</span>
                {{ number_format($car->price, 0, '.', ' ') }}K
            </div>
        </div>
        <div class="col">
            <div class="h6">
                @if($car->credit)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Credit</span>
            </div>
            <div class="h6 mb-0">
                @if($car->swap)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Swap</span>
            </div>
        </div>
    </div>
</div>