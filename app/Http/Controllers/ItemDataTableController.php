<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ItemsDataTable;
use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ItemDataTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ItemsDataTable $dataTable)
    {
        $categories = Category::with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();
        return $dataTable->render('admin.item-datatable.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        $params = $request->all();
        if ($request->hasfile('image')) {
            $image = $request->image;
            $path = 'public/item-images';
            $image = Storage::putFile($path, $request->file('image'));
            $params['image'] = $image;
        }
        Item::create($params);

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemData = Item::find($id);
        $itemData['image'] = Storage::url($itemData->image);
        $route = route('items.show', $itemData->id);

        return response()->json(array('success' => true, 'itemData' => $itemData, 'route' => $route));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemData = Item::find($id);
        $route = route('items.edit', $itemData->id);

        return response()->json(array('success' => true, 'itemData' => $itemData, 'route' => $route));
    }

    public function update(ItemRequest $request, $id)
    {
        $item = Item::find($id);
        $params = $request->all();
        if ($request->hasfile('image')) {
            $image = $request->image;
            $path = 'public/item-images';
            $image = Storage::putFile($path, $request->file('image'));
            $params['image'] = $image;
        }
        $item->update($params);

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $item = Item::where('id', $id)->delete();

        return response()->json($item);
    }

    public function destroyMultiple(Request $request)
    {
        $ids = $request->ids;
        $item = Item::whereIn('id', explode(",", $ids))->delete();
        return response()->json($item);
    }
}
