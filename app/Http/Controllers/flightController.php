<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Transaction;
use Illuminate\Http\Request;

class flightController extends Controller
{
    public  function index()
    {
        $cars = Flight::all(); // Retrieve all cars from the database

        return view('listCars', ['cars' => $cars]);
    }

    public function showCars()
    {
        // $userId = Session()->get('loginId');

        // // Check if the user is an admin
        // $user = \App\Models\User::find($userId);
        $user = auth()->user();
        
        $userCars = $user->transactions;
        $userCars = $userCars->pluck('car_id')->toArray();
        $cars = Flight::whereNotIn('id', $userCars)->get();
        // Retrieve all cars from the database

        if ($user && $user->is_admin == 0) {
            return view('admin-home', ['cars' => $cars]); // Replace 'your_admin_route_name' with the actual name of your admin route
        }


        return view('dashboard', ['cars' => $cars]);
    }
}
