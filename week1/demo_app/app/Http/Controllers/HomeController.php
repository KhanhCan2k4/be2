<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $products = Product::paginate(2);
        foreach ($products as $product) {
            $product['description'] = trim(strip_tags($product['description']));

            if (strlen($product['description'] ) > 100) {
                # code...
                $product['description']  = mb_substr($product['description'] , 0, mb_strpos($product['description'] , ' ', 100));
            }
        }

        return view('home', ['products' => $products]);
    }

    function indexAdmin() {
        return view('admin.index');
    }
}
