<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'link',
        'foto'
    ];



    protected function foto(): Attribute
    {
        return Attribute::make(
            get: function ($img) {

                if ($img != null) {

                    return       asset("assets/berita/$img");
                }

                return 'https://www.shutterstock.com/image-vector/no-image-available-picture-coming-600nw-2057829641.jpg';
            },
        );
    }
}
