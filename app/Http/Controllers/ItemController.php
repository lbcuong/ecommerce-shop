<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(ItemRequest $request)
    {
        $params = $request->all();
        $image = $request->image;
        if ($request->hasfile('image')) {
            $path = 'public/avatar';
            $image = Storage::putFile($path, $request->file('image'));
            $params['image'] = $image;
        }
        Item::create($params);

        return response()->json(['success' => 'Form is successfully submitted!']);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('items.index');
    }

    public function show(Item $item)
    {
        $itemData = $item;
        $itemData['image'] = Storage::url($itemData->image);
        $route = route('items.show', $itemData->id);

        return response()->json(array('success' => true, 'itemData' => $itemData, 'route' => $route));
    }

    public function edit(Item $item)
    {
        $itemData = $item;
        $route = route('items.edit', $itemData->id);

        return response()->json(array('success' => true, 'itemData' => $itemData, 'route' => $route));
    }

    public function update(ItemRequest $request)
    {
        $id = $request->id;
        if ($id != NULL) {
            $item = Item::find($id);
            $params = $request->all();
            $image = $request->image;
            if ($request->hasfile('image')) {
                $path = 'public/avatar';
                $image = Storage::putFile($path, $request->file('image'));
                $params['image'] = $image;
            }
            $item->update($params);

            return response()->json(['success' => 'Form is successfully submitted!']);
        } else {
            $params = $request->all();
            $image = $request->image;
            if ($request->hasfile('image')) {
                $path = 'public/avatar';
                $image = Storage::putFile($path, $request->file('image'));
                $params['image'] = $image;
            }
            Item::create($params);

            return response()->json(['success' => 'Form is successfully submitted!']);
        }
    }
}
