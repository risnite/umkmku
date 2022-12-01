<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  public function index() 
  {
    $users = User::where('id', '!=', 1)->get();
    return view('user.index', ['users' => $users]);
  }

  public function create() 
  {
    return view('user.create');
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

      return redirect(route('user'));
  }

  public function edit($id)
    {
      $user = User::find($id);
      return view('user.edit', ['user' => $user]);
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

    return redirect()->route('user');
  }
}