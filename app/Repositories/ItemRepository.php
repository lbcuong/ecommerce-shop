<?php

namespace App\Repositories;

use App\Models\Item;

class ItemRepository
{
    /**
     * @var Item
     */
    protected $item;

    /**
     * ItemRepository constructor.
     *
     * @param Item $item
     */

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function create($request)
    {
        $record = $request->all();
        $record['image'] = $this->itemService->handleUploadedImage($request->image);
        $record->save();

        return $record;
    }
}
