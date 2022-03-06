<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with(['group', 'category'])
                     ->select('name', 'category_id', 'group_id', 'price', 'detail', 'image')
                     ->get();
        return view('frontend.admin.item.index', compact('items'));
    }

    public function insert()
    {
        return view('frontend.admin.item.insert');
    }
}
