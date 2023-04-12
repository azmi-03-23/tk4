<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
public function getUsers()
{
$users = User::all();
return response()->json($users);
}

public function createUser(Request $request)
{
$user = new User();
$user->name = $request->input('name');
$user->email = $request->input('email');
$user->password = bcrypt($request->input('password'));
$user->save();
return response()->json($user);
}

public function updateUser(Request $request, $id)
{
$user = User::find($id);
$user->name = $request->input('name');
$user->email = $request->input('email');
if ($request->input('password')) {
$user->password = bcrypt($request->input('password'));
}
$user->save();
return response()->json($user);
}

public function deleteUser($id)
{
$user = User::find($id);
$user->delete();
return response()->json(['message' => 'User deleted']);
}
}
