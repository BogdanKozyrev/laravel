<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\View\View;

class OrdersController extends Controller
{
    public function __invoke(): View
    {
        $orders = Order::query()
            ->with('user')
            ->with('orderProducts.product')
            ->get();

        return view('orders', compact('orders'));
    }
}
