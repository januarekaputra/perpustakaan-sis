<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index() 
    {
      $categories = Category::latest()->filter(request(['search']))->paginate(12)->withQueryString();

      return view('pages.categories', [
        'title' => 'All Categories',
        'categories' => $categories,
        "active" => 'categories'
      ]);
    }
}
