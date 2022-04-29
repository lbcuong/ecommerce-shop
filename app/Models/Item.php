<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'category_id', 'price', 'quantity', 'detail', 'image'];
    protected $table = 'items';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getItems()
    {
        return $this->with('category')
            ->select('id', 'name', 'category_id', 'price', 'quantity', 'detail', 'image')
            ->orderBy('id', 'DESC')
            ->get();
    }
}
