<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Category $category): View
    {
        return view('categories/index')->with('posts', $category->getByCategory(10));
    }
}
