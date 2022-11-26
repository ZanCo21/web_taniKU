<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori', 
        'slug', 
    ];

    protected $hidden = [];

    public function product(){
        return $this->belongsToMany('App\Models\Produk', 'produk_kategoris');
    }

    public function Produk()
    {
        return $this->hasMany('\App\Models\Produk','id', 'id');
    }
}
