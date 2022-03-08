<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filter = $request->input('filter');

        if (!empty($filter)) {
        $items = Item::with('category')
            ->where('name', 'like', '%'.$filter.'%')
            ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
            ->paginate(5);
        }
        else {
            $items = Item::with('category')
            ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
            ->paginate(5); 
        }

        $brands = Category::with('items')->withCount('items')->where('parent_id', '!=', NULL)->get();
        $categories = Category::where('parent_id', '=', NULL)->select('name')->get();

        return view('customer.shop', compact('items', 'brands', 'categories'));
    }
}
