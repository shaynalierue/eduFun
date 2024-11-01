<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Writers;
use App\Models\Category;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writers::all(); // Mengambil semua data writers

        $categories = Category::all();//buat navbar

        return view('writers.index', compact('writers','categories'));
    }

    public function show($id)
    {
        // Ambil writer beserta courses yang berhubungan
        $writer = Writers::with('courses')->findOrFail($id);

        // Ambil semua kategori untuk dropdown navbar
        $categories = Category::all();

        return view('writers.show', compact('writer', 'categories'));
    }
}
