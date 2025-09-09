<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Alert::success('Berhasil', 'User Berhasil Ditambahkan');
        return redirect()->to('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = User::find($id);
        return view('admin.user.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) {
            $users->password = bcrypt($request->password);
        }
        $users->save();
        Alert::success('Berhasil', 'Users Berhasil diubah');

        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        Alert::success('Berhasil', 'Users Berhasil Dihapus');
        return redirect()->to('user');
    }

    public function editRole($id)
    {
        $roles = Roles::get();
        $user = User::find($id);
        
        return view('admin.user.add_role', compact('roles', 'user'));
    }

    public function updateRoles(Request $request, $id)
    {
        $user = User::find($id);
        $user->roles()->sync($request->roles ?? []);
        Alert::success('Berhasil', 'Role Berhasil Ditambahkan');
        return redirect()->to('user');
    }
}
