@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the Laravel Blade Lab</h1>
    <p>This is the home page.</p>

    <h3>Product List</h3>
    @if(empty($products))
        <p>No products available.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
            @endforeach
        </ul>
    @endif
    <x-alert type="success" message="Adding products successfully!" />
    <x-alert type="error" message="Failed to add products!" />
@endsection
