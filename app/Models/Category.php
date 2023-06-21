<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'CategoryName'
    ];

    // 1 category pny byk buku
    public function products(){
        return $this->hasMany(Product::class);
    }
}
