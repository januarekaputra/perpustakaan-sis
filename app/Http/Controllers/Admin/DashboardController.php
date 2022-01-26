<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Restore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.admin.dashboard', [
            "title" => 'DASHBOARD',
            'member' => Member::count(),
            'book' => Book::count(),
            'loan' => Loan::count(),
            'restore' => Restore::count()
        ]);
    }
}
