<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function saveProduct(Request $request)
    {
        # code...
        print('The product name is' . $request->product_name . ' price is ' . $request->product_price);
        echo('<pre> </pre>');
        if($request->hasFile('product_image')) {
            print('You have select file');
        } else {
            print('You not select file');
        }
    }
}
