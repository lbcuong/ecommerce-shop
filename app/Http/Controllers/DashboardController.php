<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ecommerce()
    {
        $orderReceived = Order::count();
        $revenueThisMonth = Order::select('email', 'content')->get();


        return view('admin.dashboard.ecommerce', compact('orderReceived', 'revenueThisMonth'));
    }
}
