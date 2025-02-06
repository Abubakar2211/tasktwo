<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable = ['price', 'priceable_id', 'priceable_type'];

    protected $table = 'product_price';

    public function priceable()
    {
        return $this->morphTo();
    }
    public function latestPrice()
    {
        return $this->where('priceable_id', $this->priceable_id)
                    ->where('priceable_type', $this->priceable_type)
                    ->latest()
                    ->first();
    }

    public function oldestPrice()
    {
        return $this->where('priceable_id', $this->priceable_id)
                    ->where('priceable_type', $this->priceable_type)
                    ->oldest()
                    ->first();
    }
    
}
