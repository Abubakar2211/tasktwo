<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable = ['name'];
    protected $table = 'product_price';

    public function priceable(){
        return $this->morphTo();
    }

}
