<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role', '!=', 2);
        if ($request->q != null) $users = $users->searchByName($request->q);
        $users = $users->paginate(15);

        return view('admin.dashboard', compact('users'));
    }

    public function getUsers(User $user)
    {
        return view('admin.show_user', compact('user'));
    }
}
