<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan semua user
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users', compact('users'));
    }

    // Menampilkan halaman tambah user
    public function addUser()
    {
        return view('admin.users_add');
    }

    //Menambahkan User
    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('/admin/users');
    }

    //Menampilkkan halaman edit
    public function editUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users_edit', compact('user'));
    }

    // Update User
    public function updateUser(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
        $user->role = $request->role;
        $user->update();
        return redirect('admin/users');

    }

    //Delete User
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();

    }
}
