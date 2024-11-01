<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Articles;
use App\Models\Category;

class PopularController extends Controller
{
    public function index()
    {
        $articles = Articles::with('writer')->paginate(3); // Pagination dengan 3 artikel per halaman
        $categories = Category::all(); // Untuk dropdown di navbar

        return view('popular.index', compact('articles', 'categories'));
    }
}