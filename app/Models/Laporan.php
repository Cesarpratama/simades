<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Laporan extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];



    public function scopeOfType(Builder $query,  $type): void
    {
        if ($type !=  null) {
            $query->where('status', $type);
        }
        $query;
    }

    protected function lampiran(): Attribute
    {
        return Attribute::make(
            get: function ($img) {

                if ($img != null) {

                    return       asset("assets/lampiran/$img");
                }

                return false;
            },
        );
    }

    public function kategori()
    {
        return $this->hasOne(KategoriLaporan::class, 'id', 'kategori_id');
    }
    public function user()
    {

        return $this->belongsToMany(User::class);
    }
}
