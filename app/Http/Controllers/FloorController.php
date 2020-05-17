<?php

namespace App\Http\Controllers;

use App\City;
use App\Category;
use App\Floor;

use Illuminate\Http\Request;

class FloorController extends Controller
{
     public function list()
    {
        $categories = Category::all();
        $cities = City::all();
        $floors = Floor::all();

        return view('floors.floors', compact('categories', 'cities', 'floors'));
    }

     public function create() {
        $cities = City::all();
        $categories = Category::with('properties')->get();
        $floors = Floor::with('properties')->get();

        return view('floors.create', compact('cities', 'categories', 'floors'));
    }

      public function store() {

        request()->validate([
            'name' => 'required',
        ]);

        $floor = new Floor();
        $floor->slug = \Str::slug(request('name'));
        $floor->name = request('name');

        $floor->save();

        return redirect('floors');
    }

        public function update($slug) {
        request()->validate([
            'name' => 'required',
        ]);

        $floors = Floor::where(['slug' => $slug])->firstOrFail();

        $floors->name = request('name');
        $floors->slug = \Str::slug(request('name'));

        $floors->save();

        return redirect('floors');
    }

    public function delete($slug)
    {
        $floor = Floor::where(['slug' => $slug])->firstOrFail();
        $floor->delete();

        return redirect('floors');
    }
}
