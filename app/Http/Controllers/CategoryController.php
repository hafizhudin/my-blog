<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('category', [
            'title' => "Blog - $category->name",
            'active' => 'blog',
            'posts' => $category->posts->load('category'),
            // 'posts' => Category::with('category')->latest('date')->get(),
            'category' => $category->name
        ]);
    }
}
