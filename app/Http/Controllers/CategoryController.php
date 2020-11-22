<?php

namespace App\Http\Controllers;

use App\City;
use App\Category;
use App\Floor;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function list()
    {
        $categories = Category::all();
        $cities = City::all();
        $floors = Floor::all();

        return view('categories.categories', compact('categories', 'cities', 'floors'));
    }

     public function create() {
        $cities = City::all();
        $categories = Category::with('properties')->get();
        $floors = Floor::with('properties')->get();

        return view('categories.create', compact('cities', 'categories', 'floors'));
    }

      public function store() {

        request()->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $category->slug = \Str::slug(request('name'));
        $category->name = request('name');

        $category->save();

        return redirect('categories');
    }

        public function update($slug) {
        request()->validate([
            'name' => 'required',
        ]);

        $categories = Category::where(['slug' => $slug])->firstOrFail();

        $categories->name = request('name');
        $categories->slug = \Str::slug(request('name'));

        $categories->save();

        return redirect('categories');
    }

    public function delete($slug)
    {
        $category = Category::where(['slug' => $slug])->firstOrFail();
        $category->delete();

        return redirect('categories');
    }
}
