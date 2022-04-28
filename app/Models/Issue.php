<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Issue extends Model
{
    use HasFactory, Commentable;
    protected $fillable = ['name'];
    protected $table = 'issues';

    public function categories()
    {
        return $this->belongsToMany(CategoryNestedSet::class, 'category_issue', 'issue_id', 'category_id');
    }
}
