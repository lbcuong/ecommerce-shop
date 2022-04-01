<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class CategoryNestedSet extends Model
{
    use HasFactory, NodeTrait;
    protected $fillable = ['name', '_lft', '_rgt', 'parent_id'];
    protected $table = 'categories_nested_set';
}
