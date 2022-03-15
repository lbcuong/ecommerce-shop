<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function ecommerce()
    {
        $orderReceived = Order::count();

        $thisMonthorderContents = Order::whereMonth('created_at', Carbon::now('Asia/Ho_Chi_Minh')->month)->select('content')->get();
        $revenueThisMonth = 0;
        foreach ($thisMonthorderContents as $orderContent) {
            $contents = json_decode($orderContent->content);
            foreach ($contents as $content) {
                $revenueThisMonth += $content->subtotal;
            }
        }

        $lastMonthorderContents = Order::whereMonth('created_at', Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->month)->select('content')->get();
        $revenueLastMonth = 0;
        foreach ($lastMonthorderContents as $orderContent) {
            $contents = json_decode($orderContent->content);
            foreach ($contents as $content) {
                $revenueLastMonth += $content->subtotal;
            }
        }

        return view('admin.dashboard.ecommerce', compact('orderReceived', 'revenueThisMonth', 'revenueLastMonth'));
    }
}
