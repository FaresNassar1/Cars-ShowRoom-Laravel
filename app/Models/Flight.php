<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table ='cars';
    protected $fillable = [
        'name',
        'image', // Add this line for the 'image' column
        'color',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'transactions', 'car_id', 'user_id')
            ->withTimestamps();
    }
}
