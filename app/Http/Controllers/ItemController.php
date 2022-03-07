<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with(['category'])
            ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
            ->get();

        return view('frontend.admin.item.index', compact('items'));
    }

    public function insert()
    {
        $categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();

        return view('frontend.admin.item.insert', compact('categories'));
    }

    public function store(ItemRequest $request)
    {
        $params = $request->all();
        $image = $request->image;
        $params['image'] = $image->move('app-assets/images/pages/eCommerce/', $image->getClientOriginalName());
        Item::create($params);

        return redirect()->route('item');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('item')->with('message', 'Item ' . $item->id . ": " . $item->name . " has been deleted!");
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();

        return view('frontend.admin.item.edit', compact('item', 'categories'));
    }

    public function update(ItemRequest $request)
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
        }
        else {
            $params['image'] = $item->select('image')->get();
        }
        $item->update($params);

        return redirect()->route('item')->with('message', 'Item ' . $item->id . ": " . $item->name . " has been updated!");
    }
}
