<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('frontend.shop', ['items' => $items]);
    }
}
