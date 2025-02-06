<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function latestPrice(){
        return $this->morphOne(ProductPrice::class,'priceable')->latest('id');
    }
    public function oldestPrice(){
        return $this->morphOne(ProductPrice::class,'priceable')->oldest('id');
    }
    public function prices()
    {
        return $this->morphMany(ProductPrice::class, 'priceable');
    }
}
