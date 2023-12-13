<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class StoreController extends Controller

{
    public function index()
    {


        $cars = Flight::all();
        return view('listCars', ['cars' => $cars]);
    }

    public function create()
    {

        return view('cars/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
            'color' => 'required',
            'price' => 'required',
        ]);
    
        $file_extension = $request->file('image')->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/dataCar';
    
        $request->file('image')->move($path, $file_name);

        $car = new Flight(); 
        $car->name = $request->name;
        $car->image = $path . '/' . $file_name; 
        $car->color = $request->color;
        $car->price = $request->price;
        
        $res = $car->save();
    
        if ($res) {
            return back()->with('success', 'Car is added');
        } else {
            return back()->with('failed', 'Something went wrong');
        }
        return redirect('listCars');

    }

    
}
