<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $table = 'categories';

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
