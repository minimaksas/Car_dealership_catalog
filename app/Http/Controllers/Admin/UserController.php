<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $page_name = 'All system\'s users';
        $table_name = 'Users';
        $data = User::get();

        return view('admin.user.list', compact('page_name', 'data', 'table_name', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'User creation page';
        return view('admin.user.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'surname' => 'required',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|min:8',
        ]);

        $vartotojai = new User();
        $vartotojai->name = $request->name;
        $vartotojai->surname = $request->surname;
        $vartotojai->email = $request->email;
        $vartotojai->password = Hash::make($request->password);
        $vartotojai->save();

        return redirect()->action('Admin\UserController@index')->with('success', 'User created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'User edit page';
        $user = User::find($id);
        return view('admin.user.edit', compact('page_name', 'user'));
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
        $this->validate($request, [
          'name' => 'sometimes|nullable',
          'surname' => 'sometimes|nullable',
          'email' => 'required|email|unique:users,email,'.$id,
          'password' => 'sometimes|nullable|min:8',
        ]);

        $vartotojai = User::find($id);
        $user = auth()->user();
        if(!empty($request->name))
        {
            $vartotojai->name = $request->name;
        }
        if(!empty($request->surname))
        {
            $vartotojai->surname = $request->surname;
        }
        $vartotojai->email = $request->email;
        if(!empty($request->password))
        {
            $vartotojai->password = Hash::make($request->password);
        }
        $vartotojai->save();

        return redirect()->action('Admin\UserController@index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->action('Admin\UserController@index')->with('success', 'User removed successfully!');
    }
}
