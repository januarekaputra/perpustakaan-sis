<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Restore;
class DetailController extends Controller
{
    public function index(Request $request, $slug){
        $item = Book::with(['category'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail', [
            'item' =>$item,
            "active" => 'home'
        ]);
    }
}
