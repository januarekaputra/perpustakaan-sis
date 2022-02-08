<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Restore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.user.dashboard', [
            "title" => 'DASHBOARD',
        ]);
    }
}
