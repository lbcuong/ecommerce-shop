<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Item;
use App\Models\Order;

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
    public function update($rowId)
    {
        $item = Cart::get($rowId);
        $update = Cart::update($rowId, $item->qty + 1);
        return response()->json($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($rowId)
    {
        $remove = Cart::remove($rowId);
        return response()->json($remove);
    }

    /**
     * Store an order.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        $params = $request->all();
        Order::create($params);
        Cart::destroy();

        return redirect()->route('carts.index');
    }
}
