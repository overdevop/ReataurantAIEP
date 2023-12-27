<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {

        $users = User::paginate(10);
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Rol::all();
        return view('users.create', ['roles' => $roles]);
    }

    public function show($id)
    {
        return view('users.show', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->idRol = $request->idRol;
        $user->save();

        return redirect()->route('viewUsers');
    }
}
