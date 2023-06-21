<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    // 1 pembeli bs beli byk product
    public function products(){
        return $this->belongsToMany(Product::class, 'product_buyer', 'buyer_id', 'product_id');
    }
}
