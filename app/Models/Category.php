<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];
    protected $table = 'categories';

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }

    public function getCategories()
    {
        return $this->with('children')->where('parent_id', '=', NULL)->select('id', 'name')->get();
    }
}
