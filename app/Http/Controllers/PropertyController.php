<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Floor;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function listAll()
    {
        if(request()->category) {
            $properties = Property::with('categories')->whereHas('categories', function ($query) {
               $query->where('slug', request()->category);
            })->get();

            $categories = Property::all();
            $cities = Property::all();
        } elseif (request()->city) {
             $properties = Property::with('cities')->whereHas('cities', function ($query) {
               $query->where('slug', request()->city);
            })->get();

            $cities = Property::all();
            $categories = Property::all();
        } elseif (request()->floor) {
            $properties = Property::with('floors')->whereHas('floors', function ($query) {
                $query->where('slug', request()->floor);
            })->get();
        } elseif (request()->price == 'asc') {
            $properties = Property::with('categories')->orderBy('price', 'ASC')->get();
        } elseif (request()->price == 'desc') {
            $properties = Property::with('categories')->orderBy('price', 'DESC')->get();
        } elseif (request()->created == 'asc') {
            $properties = Property::with('categories')->orderBy('created_at', 'ASC')->get();
        } elseif (request()->created == 'desc') {
            $properties = Property::with('categories')->orderBy('created_at', 'DESC')->get();
        }

        else {
            $properties = Property::latest()->get();
            $categories = Category::all();
            $cities = City::all();
            $floors = Floor::all();
        }

        $categories = Category::all();
        $cities = City::all();
        $floors = Floor::all();

        return view('front.properties_list', compact('properties', 'categories', 'cities', 'floors'));
    }

    public function show($slug) {
        $property = Property::where('slug', $slug)->firstOrFail();

        $relatedProperties = Property::latest()->limit(4)->get();

        return view('front.property', compact('property', 'relatedProperties'));
    }

    public function create()
    {
        $categories = Category::with('properties')->get();
        $cities = City::with('properties')->get();
        $floors = Floor::with('properties')->get();

        return view('create', compact('categories', 'cities', 'floors'));
    }

    public function store()
    {

        request()->validate([
            'title' => 'required',
        ]);

        $property = new Property();
        $property->slug = \Str::slug(request('title'));
        $property->title = request('title');
        $property->description = request('description');
        $property->price = request('price');
        $property->image_name = request('image_name');

        $property->save();

        $property->categories()->sync(request('categories'));
        $property->cities()->sync(request('cities'));
        $property->floors()->sync(request('floors'));

        return redirect('properties');
    }

    public function edit($slug)
    {
        $property = Property::where(['slug' => $slug])->firstOrFail();
        $categories = Category::all();
        $cities = City::all();
        $floors = Floor::all();

        return view('edit', compact('property', 'categories', 'cities', 'floors'));
    }

    public function update($slug)
    {
        request()->validate([
            'title' => 'required',
            'price' => 'required',
        ]);

        $property = Property::where(['slug' => $slug])->firstOrFail();

        $property->title = request('title');
        $property->slug = \Str::slug(request('title'));
        $property->price = request('price');


        if (!empty(request('image_name'))) { $property->image_name = request('image_name'); }

        $property->save();

        return redirect('properties');
    }

    public function delete($slug)
    {
        $property=Property::where(['slug' => $slug])->firstOrFail();
        $property->delete();

        return redirect('properties');
    }
}
