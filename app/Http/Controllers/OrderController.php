<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function createOrder(Request $request) {
        $order = Order::create(['status' => 'pending']);
        return response()->json($order);
    }
    
}
