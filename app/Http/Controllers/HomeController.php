<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'sliders' => Slider::all(),
            'categories' => Category::all(),
            'products' => Product::with('category')->get(),
        ]);
    }
}