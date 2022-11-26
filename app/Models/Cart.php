<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillabe =[
        'user_id',
        'prod_id',
        'prod_stok',
    ];

    public function products()
    {
        return $this->belongsTo(Produk::class, 'prod_id', 'id');
    }
}
