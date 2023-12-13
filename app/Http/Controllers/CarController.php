<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function purchaseCar($carId)
    {
        return DB::transaction(function () use ($carId) {
            $userId = auth()->user()->id;

           
            // Check if the user already owns the car
            if (Transaction::where('user_id', $userId)->where('car_id', $carId)->exists()) {
                return redirect()->route('k')->with('error', 'You already own this car.');
            }

            // Retrieve the car
            $car = Flight::findOrFail($carId);

            // Record the price at the time of purchase
            $purchasePrice = $car->price;

            // Create a new transaction record
            Transaction::create([
                'user_id' => $userId,
                'car_id' => $car->id,
                'purchase_price' => $purchasePrice,
            ]);

            return back()->with('success', 'Car purchased successfully.');
        });
    }
}
