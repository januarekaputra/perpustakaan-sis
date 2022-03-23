<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Restore;
class HomeController extends Controller
{
    public function index() 
    {
        $items = Book::with(['category'])->latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString();

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->nama_kategori;
        }
        return view('pages.home', [
            'member' => Member::count(),
            'books' => Book::count(),
            'loans' => Loan::count(),
            'restores' => Restore::count(),
            'items' => $items,
            "active" => 'home',
            "title" => $title
        ]);
    }
}