<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Category;
use App\Repositories\ItemRepository;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    protected $items, $categories;
    public function __construct(){
        $this->items = new Item();
        $this->categories = new Category();
    }
    
    public function index()
    {
        return view('admin.item.index', ['items' => $this->items->getItems(), 'categories' => $this->categories->getCategories()]);
    }

    public function create()
    {
        return view('admin.item.create', ['categories' => $this->categories->getCategories()]);
    }

    public function store(ItemRequest $request, ItemRepository $itemRepository)
    {
        return response()->json(['record' => $itemRepository->create($request), 'success' => true]);
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
