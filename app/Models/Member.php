<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Loan;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'no_anggota', 'nama_anggota', 'jen_kel', 'status', 'alamat', 'email', 'no_telp'
    ];

    protected $primaryKey = 'no_anggota';

    protected $hidden = [

    ];

    public function loan()
    {
        return $this->hasMany(Loan::class, 'loans_id', 'id');
    }

}
