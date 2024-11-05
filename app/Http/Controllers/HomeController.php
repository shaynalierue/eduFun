<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Articles;

class HomeController extends Controller
{
    public function index()
    {
         // Mengambil semua courses beserta data writer dan category yang terkait
        //  $courses = Course::with(['writer', 'category'])->get();

         // Mengambil semua categories
         $categories = Category::all();
        
        // Mengambil dua artikel terpopuler berdasarkan kolom views
        $articles = Articles::with('writer')
        ->orderBy('articleViews', 'desc') // Mengurutkan berdasarkan jumlah views
        ->take(2) // Mengambil 2 artikel terpopuler
        ->get();

         // Mengirim data categories dan articles ke view home.blade.php
         return view('home.index', compact('categories', 'articles'));
    }
}
