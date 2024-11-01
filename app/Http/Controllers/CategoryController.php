<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function show($id)
    {
        
        $courses = Course::with('writer')->where('categoryId', $id)->get();
    $categories = Category::all();

    return view('category.index', compact('courses', 'categories'));
    }
}
