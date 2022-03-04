<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'category_id'];
    protected $table = 'groups';

    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
