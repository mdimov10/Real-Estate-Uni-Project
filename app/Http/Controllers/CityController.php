<?php

namespace App\Http\Controllers;

use App\City;
use App\Category;
use App\Floor;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function list()
    {
        $categories = Category::all();
        $cities = City::all();
        $floors = Floor::all();

        return view('cities.cities', compact('categories', 'cities', 'floors'));
    }

     public function create() {
        $cities = City::all();
        $categories = Category::with('properties')->get();
        $floors = Floor::with('properties')->get();

        return view('cities.create', compact('cities', 'categories', 'floors'));
    }

      public function store() {

        request()->validate([
            'name' => 'required',
        ]);

        $city = new City();
        $city->slug = \Str::slug(request('name'));
        $city->name = request('name');

        $city->save();

        return redirect('cities');
    }

        public function update($slug) {
        request()->validate([
            'name' => 'required',
        ]);

        $city = City::where(['slug' => $slug])->firstOrFail();

        $city->name = request('name');
        $city->slug = \Str::slug(request('name'));

        $city->save();

        return redirect('cities');
    }

    public function delete($slug)
    {
        $city = City::where(['slug' => $slug])->firstOrFail();
        $city->delete();

        return redirect('cities');
    }
}
