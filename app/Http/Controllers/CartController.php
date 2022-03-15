<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\PaymentMethod;
use HoangPhi\VietnamMap\Models\Province;
use HoangPhi\VietnamMap\Models\District;
use HoangPhi\VietnamMap\Models\Ward;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addressTypes = ['Home', 'Work'];
        $provinces = Province::select('id', 'name')->get();
        $paymentMethods = PaymentMethod::select('name')->get();

        return view('cart.index', compact('provinces', 'addressTypes', 'paymentMethods'));
    }

    /**
     * Get District.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getDistrict(Request $request)
    {
        $provinceId = $request->post('provinceId');
        $districts = District::where('province_id', $provinceId)->select('id', 'name')->get();
        $html='<option value="">Please choose your District</option>';
		foreach($districts as $district){
			$html.='<option value="'.$district->id.'">'.$district->name.'</option>';
		}
		echo $html;
    }

    /**
     * get Ward.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getWard(Request $request)
    {
        $districtId = $request->post('districtId');
        $wards = District::where('district_id', $districtId)->select('id', 'name')->get();
        $html='<option value="">Please choose your Ward</option>';
		foreach($wards as $ward){
			$html.='<option value="'.$ward->id.'">'.$ward->name.'</option>';
		}
		echo $html;
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
        return redirect()->route('detail', $item->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $update = Cart::update($id, $qty);
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
     * @param  \Illuminate\Http\Request  $request
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
