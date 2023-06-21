<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'Name',
        'Description',
        'Price',
        'Quantity',
        // image
        'Category_Id',
        'Image'
    ];

    // masukin function dgn nama yg mau kita hubungkan
    // mau hubungin sama category jdi nama function nya category
    public function category(){
        return $this->belongsTo(Category::class, 'Category_Id');
    }

    // relation Product dgn buyer
    public function buyers(){
        return $this->belongsToMany(Buyer::class, 'product_buyer', 'product_id', 'buyer_id');
    }
}
