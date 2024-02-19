<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Day;
use App\Models\FoodCategory;
use App\Models\Highlight;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class PlaceController extends Controller {
    public function resorts() {
        return view('dashboard.places.index');
    }

    public function restaurants() {
        return view('dashboard.places.index');
    }

    public function show() {
    }

    public function create() {
        return view('dashboard.places.create', [
            'vendors' => User::allVendors(),
            'areas' => Area::orderBy('name')->get(),
            'food_categories' => FoodCategory::orderBy('name')->get(),
            'highlights' => Highlight::orderBy('name')->get(),
            'social_medias' => SocialMedia::all(),
            'days' => Day::all(),
        ]);
    }

    public function store(Request $request) {
        // return $request->opening_time;
        if ($request->has('opening_days')) {
            foreach ($request->opening_days as $key => $value) {
                echo "day:" . $value . ", start:" . $request->opening_time[$value - 1] . " end:" . $request->closing_time[$value - 1] . "\n";
            }
        }
    }

    public function edit() {
    }

    public function update() {
    }

    public function delete() {
    }
}
