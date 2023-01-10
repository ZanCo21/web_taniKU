<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'name_produk',
        'slug',
        'harga',
        'image',
        'short_description',
        'description',
        'stok',
        'weight',
    ];

    public function kategoris()
    {
        return $this->belongsToMany('App\Models\Kategori', 'produk_kategoris');
    }

    public function statuses(){
        return[
            0 => 'draft',
            1 => 'active',
            2 => 'inactive',
        ];
    }
}
