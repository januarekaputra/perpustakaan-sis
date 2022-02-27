<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Loan;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $hidden = [

    ];

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nama_kategori', 'like', '%' . $search . '%');
        });
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public static function kode()
    {
        $kode_kategori = DB::table('categories')->max('kode_kategori');
        $addNol = '';
        $kode_kategori = str_replace("CAT", "", $kode_kategori);
        $kode_kategori = (int) $kode_kategori + 1;
        $incrementKode = $kode_kategori;

        if (strlen($kode_kategori) == 1) {
            $addNol = "000";
        } elseif (strlen($kode_kategori) == 2) {
            $addNol = "00";
        } elseif (strlen($kode_kategori == 3)) {
            $addNol = "0";
        }
        $kodeBaru = "CAT".$addNol.$incrementKode;
        return $kodeBaru;
    }
}
