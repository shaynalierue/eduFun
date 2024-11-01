<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Articles;
use App\Models\Category;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Articles::with('writer')->findOrFail($id); // Mengambil artikel beserta writer
        $categories = Category::all(); // Mengambil semua kategori untuk dropdown

        return view('articles.show', compact('article', 'categories'));
    }
}
