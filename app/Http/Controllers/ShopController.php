<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller
{
    public function index()
    {
        $items = Item::select('name', 'price', 'detail', 'image')->get();
        return view('frontend.customer.shop', compact('items'));
    }
}
