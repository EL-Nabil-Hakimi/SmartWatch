<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function create(Request $request){
        Product::create(
            [
                'name' => $request->name,
                'description' => $request->description,
                'prix' => $request->prix,
                'image' => $request->image,
                'stock' => $request->stock,                
            ]
        );
        return response()->json(['message' => 'Product created successfully'], 200);
    }   
    
}
