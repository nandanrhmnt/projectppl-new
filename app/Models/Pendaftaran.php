<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $guarded = [];
    protected $primaryKey = 'no_pendaftaran';
    // protected $fillable = ['nama','npm', 'jeni_kelamin', 'agama', 'angkatan', 'jurusan', 'alamat_domisili','tempat_lahir','tanggal_lahir'];
    public static $rules = [
        'pembelian_merchandise' => 'in:Ya,Tidak', // Hanya menerima nilai "Ya" atau "Tidak"
    ];

}
