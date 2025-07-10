<?php

namespace App\Http\Controllers;

use App\Models\Product;

class FStoreController extends Controller
{

    public function fstore()
    {
        $product = Product::get();

        return view('fstore', [
            "title" => "F-Store",
            "product" => $product
        ]);
    }
}
