<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserApiController extends Controller
{
  public function index()
  {
    $users = User::where('id', '!=', 1)->get();
    return response()->json(['message' => 'Success', 'data' => $users]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'role' => ['required'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
      'name' => $request->name,
      'role' => $request->role,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    return response()->json(['message' => 'Success', 'data' => $user]);
  }

  public function edit($id)
  {
    $user = User::find($id);
    return response()->json(['message' => 'Success', 'data' => $user]);
  }

  public function update(Request $request, $id)
  {
    $user = User::find($id);

    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'role' => ['required'],
      'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user->name = $request->name;
    $user->role = $request->role;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    return response()->json(['message' => 'Success', 'data' => $user]);
  }
}
