<?php

namespace App\Http\Controllers;

use App\Http\Requests\IssueRequest;
use App\Models\Issue;
use App\Models\CategoryNestedSet;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $issues = Issue::with('categories')->select('id', 'name')->get();
        $categories = CategoryNestedSet::get()->toTree();
        $traverseSelect = function ($categories, $prefix = '') use (&$traverseSelect) {
            foreach ($categories as $category) {
                echo "<option value='$category->id'>$prefix $category->name</option>";
        
                $traverseSelect($category->children, $prefix.'-');
            }
        };
        return view('admin.issues.index', compact('issues', 'categories', 'traverseSelect'));
    }

    public function store(IssueRequest $request)
    {
        $attributes = $request->all();
        //dd($attributes['categories_id']);
        $data = Issue::create($attributes);
        $issue = Issue::find($data->id);
        $issue->categories()->attach($attributes['categories_id']);
        return response()->json(['success' => 'Form is successfully submitted!']);
    }
}
