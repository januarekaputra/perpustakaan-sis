<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Member;
use App\Models\Restore;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $primaryKey = 'id';

    protected $hidden = [

    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id', 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'members_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function restore()
    {
        return $this->belongsTo(Restore::class, 'restores_id', 'id');
    }

    public static function kode()
    {
        $kode_peminjaman = DB::table('loans')->max('kode_peminjaman');
        $addNol = '';
        $kode_peminjaman = str_replace("LN", "", $kode_peminjaman);
        $kode_peminjaman = (int) $kode_peminjaman + 1;
        $incrementKode = $kode_peminjaman;

        if (strlen($kode_peminjaman) == 1) {
            $addNol = "000";
        } elseif (strlen($kode_peminjaman) == 2) {
            $addNol = "00";
        } elseif (strlen($kode_peminjaman == 3)) {
            $addNol = "0";
        }
        $kodeBaru = "LN".$addNol.$incrementKode;
        return $kodeBaru;
    }

    // public function getDataById($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('loans');
    //     $this->db->join('members', 'loans.members_id = members.id');
    //     $this->db->join('books', 'loans.books_id', '=', 'books.id');
    //     $this->db->where('loans.id', $id);
    //     return $this->db->get()->row_array();
    // }
}
