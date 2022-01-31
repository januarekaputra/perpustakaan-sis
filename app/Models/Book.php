<?php

namespace App\Models;

use App\Models\Loan;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'books';
    protected $guarded = [
        'id'
    ];

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    protected $primaryKey = 'id';

    protected $hidden = [

    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function loan()
    {
        return $this->hasMany(Loan::class);
    }

    public static function kode()
    {
        $kode_buku = DB::table('books')->max('kode_buku');
        $addNol = '';
        $kode_buku = str_replace("BK", "", $kode_buku);
        $kode_buku = (int) $kode_buku + 1;
        $incrementKode = $kode_buku;

        if (strlen($kode_buku) == 1) {
            $addNol = "000";
        } elseif (strlen($kode_buku) == 2) {
            $addNol = "00";
        } elseif (strlen($kode_buku == 3)) {
            $addNol = "0";
        }
        $kodeBaru = "BK".$addNol.$incrementKode;
        return $kodeBaru;
    }
}
