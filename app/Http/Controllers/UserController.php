<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UsersDataTable;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $params = $request->all();
        $password = Hash::make($request->password);
        $params['password'] = $password;
        User::create($params);
        //$role = $request->role;
        //dd($role);
        //$user->assignRole('admin');

        return response()->json(['success' => true]);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $image = Storage::disk('local')->exists($user->image);
        if ($image) {
            $user['image'] = Storage::url($user->image);
        } else {
            $user['image'] = Storage::url('public/user-avatars/user.png');
        }
        
        $route = route('users.show', $user->id);

        return response()->json(array('success' => true, 'user' => $user, 'route' => $route));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $route = route('users.edit', $user->id);

        return response()->json(array('success' => true, 'user' => $user, 'route' => $route));
    }

    public function update(UserRequest $request, $id)
    {
        $User = User::find($id);
        $password = Hash::make($request->password);
        $params['password'] = $password;
        $User->update($params);

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $User = User::where('id', $id)->delete();

        return response()->json($User);
    }

    public function destroyMultiple(Request $request)
    {
        $ids = $request->ids;
        $User = User::whereIn('id', explode(",", $ids))->delete();
        return response()->json($User);
    }
}
