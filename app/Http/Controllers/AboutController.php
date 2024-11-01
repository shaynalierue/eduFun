<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AboutController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Mengambil semua kategori untuk dropdown navbar

        return view('about.index', compact('categories'));
    }
}
