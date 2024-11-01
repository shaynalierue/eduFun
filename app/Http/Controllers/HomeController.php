<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
         // Mengambil semua courses beserta data writer dan category yang terkait
         $courses = Course::with(['writer', 'category'])->get();

         // Mengambil semua categories
         $categories = Category::all();
 
         // Mengirim data courses dan categories ke view home.blade.php
         return view('home.index', compact('courses', 'categories'));
    }
}
