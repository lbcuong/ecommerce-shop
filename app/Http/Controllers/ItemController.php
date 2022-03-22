<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('category')
            ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
            ->orderBy('id', 'DESC')
            ->get();

        $categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();

        return view('admin.item.index', compact('items', 'categories'));
    }

    public function create()
    {
        $categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();

        return view('admin.item.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $params = $request->all();
        $image = $request->image;
        $params['image'] = $image->move('app-assets/images/pages/eCommerce/', $image->getClientOriginalName());
        Item::create($params);

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();

        return view('admin.item.edit', compact('item', 'categories'));
    }

    public function update(Request $request)
    {
        $item = Item::find($request->id);
        $params = $request->all();
        $image = $request->image;
        if ($request->hasfile('image')) {
            $destination = 'app-assets/images/pages/eCommerce/' . $image->getClientOriginalName();
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $params['image'] = $image->move('app-assets/images/pages/eCommerce/', $image->getClientOriginalName());
        } else {
            $params['image'] = Item::where('id', $request->id)->get('name');
        }
        $item->update($params);

        return redirect()->route('items.index');
    }
}
