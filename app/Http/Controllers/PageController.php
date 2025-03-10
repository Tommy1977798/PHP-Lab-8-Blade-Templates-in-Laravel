<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = [
          ['id' => 1, 'name' => 'Tablet', 'price' => 100],
          ['id' => 2, 'name' => 'Phone', 'price' => 200],
          ['id' => 3, 'name' => 'Laptop', 'price' => 300],
    
    ]; // Mocked Data
        return view('home', compact('products'));
    }

    public function about()
    {
        return view('about');
    }
}
