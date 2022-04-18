<?php

namespace App\Http\Controllers;

use App\Models\CategoryNestedSet;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryNestedSet::get()->toTree();

        $traverse = function ($cats, $prefix = 20) use (&$traverse) {
            foreach ($cats as $cat) {
                if (count($cat->children) > 0) {
                echo "<tr data-id='{{ $cat->id }}' data-parent='{{ $cat->parent_id }}'>".
                        "<td>".
                            "<div class='custom-control custom-checkbox'>".
                                "<input type='checkbox' data-id='{{ $cat->id }}' id='{{ $cat->id }}' class='custom-control-input items-checkbox'>".
                                "<label class='custom-control-label' for='{{ $cat->id }}'></label>".
                            "</div>".
                        "</td>".
                        "<td>$cat->id</td>".
                        "<td data-column='name'><span class='text-right fa fa-folder-o'". "style='width: ". "$prefix". "px; cursor: pointer;'></span>". " $cat->name". "</td>".
                    "</tr>";
                }
                else {
                    echo "<tr data-id='{{ $cat->id }}' data-parent='{{ $cat->parent_id }}'>".
                        "<td>".
                            "<div class='custom-control custom-checkbox'>".
                                "<input type='checkbox' data-id='{{ $cat->id }}' id='{{ $cat->id }}' class='custom-control-input items-checkbox'>".
                                "<label class='custom-control-label' for='{{ $cat->id }}'></label>".
                            "</div>".
                        "</td>".
                        "<td>$cat->id</td>".
                        "<td data-column='name'><span class='position-relative d-inline-block' style='width: ". "$prefix". "px;'></span> $cat->name</td>".
                    "</tr>";
                }
                $traverse($cat->children, $prefix + 20);
            }
        };
        return view('admin.category.index', compact('categories', 'traverse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
