<?php

namespace App\Services;

use App\Providers\HelperServiceProvider;
use App\Repositories\ItemRepository;

class ItemService
{
    /**
     * @var $itemRepository
     */
    protected $itemRepository,
        $path = HelperServiceProvider::ITEM;

    /**
     * ItemRepository constructor.
     *
     * @param ItemRepository $itemRepository
     */

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function handleUploadedImage($request)
    {
        return $request->hasfile('image') ? uploadFile($this->path, $request->file('image')) : null;
    }
}
