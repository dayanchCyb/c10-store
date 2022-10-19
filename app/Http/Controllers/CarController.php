<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Location;
use App\Models\Year;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'brand_ids' => 'nullable|array|min:1',
            'brand_ids.*' => 'integer|distinct|min:1',

            'color_ids' => 'nullable|array|min:1',
            'color_ids.*' => 'integer|distinct|min:1',

            'year_ids' => 'nullable|array|min:1',
            'year_ids.*' => 'integer|distinct|min:1',

            'location_ids' => 'nullable|array|min:1',
            'location_ids.*' => 'integer|distinct|min:1',

            'credit' => 'nullable|boolean',
            'swap' => 'nullable|boolean',

            'min_price' => 'nullable|integer|min:0',
            'max_price' => 'nullable|integer|gt:min_price',

            'phone' => 'nullable|integer|between:60000000,65999999',
        ]);
        $brandIds = $request->has('brand_ids') ? $request->brand_ids : [];
        $colorIds = $request->has('color_ids') ? $request->color_ids : [];
        $yearIds = $request->has('year_ids') ? $request->year_ids : [];
        $locationIds = $request->has('location_ids') ? $request->location_ids : [];
        $credit = $request->has('credit') ? $request->credit : null;
        $swap = $request->has('swap') ? $request->swap : null;
        $minPrice = $request->has('min_price') ? $request->min_price : null;
        $maxPrice = $request->has('max_price') ? $request->max_price : null;
        $phone = $request->has('phone') ? $request->phone : null;

        $cars = Car::when($brandIds, function ($query, $brandIds) {
            $query->whereIn('brand_id', $brandIds);
        })
            ->when($colorIds, function ($query, $colorIds) {
                $query->whereIn('color_id', $colorIds);
            })
            ->when($yearIds, function ($query, $yearIds) {
                $query->whereIn('year_id', $yearIds);
            })
            ->when($locationIds, function ($query, $locationIds) {
                $query->whereIn('location_id', $locationIds);
            })
            ->when($credit, function ($query) {
                $query->where('credit', 1);
            })
            ->when($swap, function ($query) {
                $query->where('swap', 1);
            })
            ->when($minPrice, function ($query, $minPrice) {
                $query->where('price', '>=', $minPrice);
            })
            ->when($maxPrice, function ($query, $maxPrice) {
                $query->where('price', '<=', $maxPrice);
            })
            ->when($phone, function ($query, $phone) {
                $query->where('phone', $phone);
            })
            ->with(['brand', 'color', 'year', 'location'])
            ->orderBy('id', 'desc')
            ->simplePaginate(50);

        $cars = $cars->appends([
            'brand_ids' => $brandIds,
            'color_ids' => $colorIds,
            'year_ids' => $yearIds,
            'location_ids' => $locationIds,
            'credit' => $credit,
            'swap' => $swap,
            'min_price' => $minPrice,
            'max_price' => $maxPrice,
            'phone' => $phone,
        ]);

        $brands = Brand::orderBy('name')
            ->get();
        $colors = Color::orderBy('name')
            ->get();
        $years = Year::orderBy('name')
            ->get();
        $locations = Location::orderBy('name')
            ->get();

        return view('car.index')
            ->with([
                'cars' => $cars,
                'brands' => $brands,
                'colors' => $colors,
                'years' => $years,
                'locations' => $locations,
                'brandIds' => $brandIds,
                'colorIds' => $colorIds,
                'yearIds' => $yearIds,
                'locationIds' => $locationIds,
                'credit' => $credit,
                'swap' => $swap,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'phone' => $phone,
            ]);
    }


    public function show($id)
    {

    }
}
