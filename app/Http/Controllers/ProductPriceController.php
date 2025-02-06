<?php

namespace App\Http\Controllers;

use App\Models\ProductPrice;
use Illuminate\Http\Request;

class ProductPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $productprice = ProductPrice::with('priceable')->get();
        // $data = $productprice->map(function($price){
        //     return [
        //        'price' => $price->price,
        //        'price type' => basename($price->priceable_type),
        //        'Modal id' => $price->priceable->id,
        //        'Modal price' => $price->priceable->name,
        //     ];
        // });
        // return $data;
      
        $productPrices = ProductPrice::all();

        $data = $productPrices->map(function ($productPrice) {
            $latestPrice = $productPrice->latestPrice();
            $oldestPrice = $productPrice->oldestPrice();
        
            return [
                'Priceable Name' => $productPrice->priceable->name,
                'Latest Price' => $latestPrice ? $latestPrice->price : null,
                'Oldest Price' => $oldestPrice ? $oldestPrice->price : null,
            ];
        });
        
        return $data;
        
        


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
