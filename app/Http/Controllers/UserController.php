<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUserProfile($userId)
    {
        $profile =auth()->user();
        return view('profile', ['profile' => $profile]);
    }

  
}