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
        return $this->hasMany(Category::class, 'parent_id')->with('children');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
