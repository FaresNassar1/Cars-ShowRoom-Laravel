<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email', // Add this line for the 'image' column
        'is_admin',
        'password',
        'phone',
    ];

    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Flight::class, 'transactions', 'user_id', 'car_id')
            ->withTimestamps();
    }

    // public function calculateTotalCashSpent()
    // {
    //     return $this->transactions->sum('purchase_price');
    // }

    // public function getProfile()
    // {
    //     $profile = [
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'phone' => $this->phone,
    //         'is_admin' => $this->is_admin,
    //         'transaction_count' => $this->transactions->count(),
    //         'cars' => $this->cars,
    //         'total_cash_spent' => $this->calculateTotalCashSpent(),
    //     ];

    //     return $profile;
    // }
}
