<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Item;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::findOrFail($request->input('id'));
        Cart::add($item->id, $item->name, $request->input('quantity'), $item->price, 0, ['image' => $item->image])->associate('App\Models\Item');
        return redirect()->route('carts.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($item, ['qty' => $request->input('quantity')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('carts.index');
    }
}
