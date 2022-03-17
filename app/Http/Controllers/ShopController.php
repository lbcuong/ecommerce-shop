<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Tenant;
use App\Models\Domain;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $priceSorting = $request->input('price-sorting');

        if (!empty($filter)) {
            switch ($priceSorting) {
                case ('1'):
                    $items = Item::with('category')
                        ->where('name', 'like', '%' . $filter . '%')
                        ->orderBy('price', 'ASC')
                        ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
                        ->paginate(9);
                    break;
                case ('2'):
                    $items = Item::with('category')
                        ->where('name', 'like', '%' . $filter . '%')
                        ->orderBy('price', 'DESC')
                        ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
                        ->paginate(9);
                    break;
                default:
                    $items = Item::with('category')
                        ->where('name', 'like', '%' . $filter . '%')
                        ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
                        ->paginate(9);
            }
        } else {
            switch ($priceSorting) {
                case ('1'):
                    $items = Item::with('category')
                        ->orderBy('price', 'ASC')
                        ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
                        ->paginate(9);
                    break;
                case ('2'):
                    $items = Item::with('category')
                        ->orderBy('price', 'DESC')
                        ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
                        ->paginate(9);
                    break;
                default:
                    $items = Item::with('category')
                        ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
                        ->paginate(9);
            }
        }

        $brands = Category::with('items')->withCount('items')->where('parent_id', '!=', NULL)->get();
        $categories = Category::where('parent_id', '=', NULL)->select('name')->get();

        $domains = Domain::select('domain')->get();
        $domainEmail = 'odinbi.com';
        $a = '';

        foreach ($domains as $domain) {
            if ($domainEmail == $domain->domain) {
                $tenantId = Domain::where('domain', $domain->domain)->select('tenant_id')->first();
                if (!empty($tenantId)) {
                    $database = Tenant::where('id', $tenantId->tenant_id)->select('database')->first();
                    if (!empty($database)) {
                        $a = $database->database;
                    }
                }
            }
        }

        return view('shop.index', compact('items', 'brands', 'categories', 'a'));
    }

    public function detail($id)
    {
        $item = Item::find($id);
        //$categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();

        $relatedItems = Item::where('category_id', $item->category_id)->select('id', 'name', 'category_id', 'price', 'image')->get();

        return view('shop.detail', compact('item', 'relatedItems'));
    }
}
