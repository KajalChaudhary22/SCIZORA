<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class UsersController extends Controller
{
    // public function store(Request $request)
    // {
    //     return view('admin.users.store');
    // }
     public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:admins',
        'phone' => 'nullable|string|max:20',
        // 'type' => 'required|in:customer,business,admin',
        'password' => 'required|string|min:6',
    ]);

    $user = Admin::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        // 'type' => $validated['type'],
        'password' => bcrypt($validated['password']),
    ]);

    return response()->json(['success' => true, 'user' => $user]);
}

}
