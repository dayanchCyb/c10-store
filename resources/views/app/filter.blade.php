<form action="{{ url()->current() }}" method="get">
    <div class="mb-3">
        <label for="brand" class="form-label fw-bold">Brands</label>
        <select class="form-select" name="brand_ids[]" id="brand" multiple size="3">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ in_array($brand->id, $brandIds) ? 'selected':'' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="color" class="form-label fw-bold">Colors</label>
        <select class="form-select" name="color_ids[]" id="color" multiple size="3">
            @foreach($colors as $color)
                <option value="{{ $color->id }}" {{ in_array($color->id, $colorIds) ? 'selected':'' }}>
                    {{ $color->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label fw-bold">Years</label>
        <select class="form-select" name="year_ids[]" id="year" multiple size="3">
            @foreach($years as $year)
                <option value="{{ $year->id }}" {{ in_array($year->id, $yearIds) ? 'selected':'' }}>
                    {{ $year->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label fw-bold">Locations</label>
        <select class="form-select" name="location_ids[]" id="location" multiple size="3">
            @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ in_array($location->id, $locationIds) ? 'selected':'' }}>
                    {{ $location->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="min_price" class="form-label fw-bold">Min Price</label>
            <input type="number" class="form-control" name="min_price" id="min_price" placeholder="0"
                   value="{{ isset($minPrice) ? $minPrice : old('min_price') }}">
        </div>
        <div class="col">
            <label for="max_price" class="form-label fw-bold">Max Price</label>
            <input type="number" class="form-control" name="max_price" id="max_price" placeholder="0"
                   value="{{ isset($maxPrice) ? $maxPrice : old('max_price') }}">
        </div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label fw-bold">Phone</label>
        <div class="input-group">
            <span class="input-group-text">+993</span>
            <input type="number" class="form-control" name="phone" id="phone"
                   min="60000000" maxlength="65999999" placeholder="61234567"
                   value="{{ isset($phone) ? $phone : old('phone') }}">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="credit" id="credit" value="1"
                        {{ isset($credit) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="credit">Credit</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="swap" id="swap" value="1"
                        {{ isset($swap) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="swap">Swap</label>
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col">
            <button type="submit" class="btn btn-dark w-100">Filter</button>
        </div>
        <div class="col-auto">
            <a href="{{ url()->current() }}" class="btn btn-light w-100">Clear</a>
        </div>
    </div>
</form>