<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __invoke(Request $request): View
    {
        $ordersQuery = Order::query()
            ->with('user')
            ->with('orderProducts.product.productIngredient.ingredient');

        if ($request->has('user_id')) {
            $ordersQuery->where('user_id', $request->input('user_id'));
        }

        $orders = $ordersQuery->get();

        return view('orders', compact('orders'));
    }
}
