<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function detail(){
        return $this->hasOne(ProductDetail::class, 'product_id', 'id');
    }
}
