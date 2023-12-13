<!-- resources/views/profile.blade.php -->

@extends('layouts.dash-admin')

@section('content')
<div class="container" style="margin-top: 150px; font-size: 20px;letter-spacing: 2px">

    <a href="{{ route('k') }}" style="text-decoration: none; color: inherit;">

        <h1
            style="text-align: center; color: #3498db; font-size: 3em; margin-bottom: 30px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); animation: fadeInUp 1s ease-out;">
            User Profile
        </h1>

        <div class="user-profile"
            style="text-align: center; background-color: #f2f5f8; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 12px; overflow: hidden;">
            <div class="user-details" style="background-color: #3498db; color: #fff; padding: 20px;">
                <strong>Name:</strong> {{ $profile->name }}<br>
                <strong>Email:</strong> {{ $profile->email }}<br>
                <strong>Phone:</strong> {{ $profile->phone }}<br>
                <strong>Admin:</strong> {{ $profile->is_admin ? 'Yes' : 'No' }}<br>
            </div>

            <div class="transaction-details" style="padding: 20px;">
                <h2 style="color: #3498db;">Transaction Details</h2>
                <strong>Transaction Count:</strong> {{ $profile->transactions->count() }}<br>
                <strong>Total Cash Spent:</strong> ${{ number_format($profile->transactions->sum('purchase_price'), 2)
                }}<br>
            </div>

            <div class="cars-owned" style="background-color: #ecf0f1; padding: 20px;">
                <h2 style="color: #3498db;">Cars Owned</h2>
                @if(count($profile->cars) > 0)
                <ul style="list-style-type: none; padding: 0;">
                    @foreach($profile->cars as $car)
                    <li style="margin-bottom: 10px; border-bottom: 1px solid #bdc3c7; padding-bottom: 5px;">{{
                        $car->name }} ({{ $car->price}}) <span style="color: rgb(87, 74, 0)">$</span></li>
                    @endforeach
                </ul>
                @else
                <p>No cars owned.</p>
                @endif
            </div>
        </div>
</div>
@endsection