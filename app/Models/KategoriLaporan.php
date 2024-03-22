<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriLaporan extends Model
{
    use HasFactory;

    protected $table = 'kategori_laporans';
    protected $guarded = [];
    public $timestamps = false;

    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id', 'kategori_id');
    }
}
