<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    public function show($id)
    {
        $course = Course::with(['writer', 'category'])->findOrFail($id);
        $categories = Category::all(); // Untuk dropdown navbar

        return view('course.index', compact('course', 'categories'));
    }
}
