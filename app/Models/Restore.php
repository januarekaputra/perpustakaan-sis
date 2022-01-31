<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Loan;

class Restore extends Model
{
    use HasFactory;

    protected $table = 'restores';
    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public static function join(){
        $items = DB::table('restores')
                ->join('loans', 'restores.id', '=', 'loans.kode_peminjaman')
                ->join('members', 'loans.members_id', '=', 'members.id')
                ->join('books', 'loans.books_id', '=', 'books.id')
                ->select('restores.*', 'loans.*', 'members.*', 'books.*')
                ->get();
                return $items;
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loans_id', 'id');
    }

}
