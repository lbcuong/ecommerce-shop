<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UsersDataTable;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        $params = $request->all();
        $image = $request->image;
        $params['image'] = $image->move('app-assets/images/pages/eCommerce/', $image->getClientOriginalName());
        User::create($params);

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();

        return redirect()->route('users.index');
    }
}
