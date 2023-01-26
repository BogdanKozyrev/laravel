<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Выводит список продуктов
     * @return View
     */
    public function products(): View
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

}
