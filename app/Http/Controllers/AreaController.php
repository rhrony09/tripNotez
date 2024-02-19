<?php

namespace App\Http\Controllers;

use App\Helpers\Reply;
use App\Http\Requests\AreaAddRequest;
use App\Http\Requests\AreaUpdateRequest;
use App\Models\Area;
use App\Models\City;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller {
    public function index() {
        return view('dashboard.areas.index', [
            'cities' => City::all()->sortBy('name'),
            'areas' => Area::with('city')->get()->sortBy('name'),
        ]);
    }

    public function create() {
        return view('dashboard.areas.create', [
            'cities' => City::all()->sortBy('name'),
            'page_title' => 'Add Area',
        ]);
    }

    public function store(AreaAddRequest $request) {
        DB::beginTransaction();
        try {
            $area = Area::create([
                'name' => $request->name,
                'city_id' => $request->city,
                'best_time' => $request->best_time,
                'description' => $request->description,
            ]);

            if ($request->has('image')) {
                $extension = $request->image->getClientOriginalExtension();
                $image_name = $area->id . '-' . uniqid() . '.' . $extension;
                $image_path = 'uploads/areas/' . $image_name;
                Image::make($request->image)->fit(1920, 540)->save(public_path($image_path));

                $area->update([
                    'image' => $image_name,
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return Reply::error($e->getMessage());
        }

        return Reply::success('Area addedd successfully.');
    }

    public function edit($id) {
        return view('dashboard.areas.edit', [
            'area' => Area::find($id),
            'cities' => City::all()->sortBy('name'),
            'page_title' => 'Edit Area',
        ]);
    }

    public function update(AreaUpdateRequest $request) {
        DB::beginTransaction();
        try {
            $area = Area::find($request->id);

            $area->update([
                'name' => $request->name,
                'city_id' => $request->city,
                'best_time' => $request->best_time,
                'description' => $request->description,
            ]);

            if ($request->has('image')) {
                $extension = $request->image->getClientOriginalExtension();
                $image_name = $area->id . '-' . uniqid() . '.' . $extension;
                $image_path = 'uploads/areas/' . $image_name;
                unlink('uploads/areas/' . $area->image);
                Image::make($request->image)->fit(1920, 540)->save(public_path($image_path));

                $area->update([
                    'image' => $image_name,
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return Reply::error($e->getMessage());
        }

        return Reply::success('Area updated successfully.');
    }

    public function delete($id) {
        $area = Area::find($id);
        unlink('uploads/areas/' . $area->image);
        $area->delete();
        return Reply::returnBack('Area deleted successfully.');
    }
}
