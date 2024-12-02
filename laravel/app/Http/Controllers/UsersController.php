<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function get_users(Request $request)
    {
        $users = User::all();
        return response()->json([
            "users" => $users,
        ]);
    }

    public function create_user(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        return response()->json([
            "created_user" => $user,
        ]);
    }

    public function update_user(Request $request)
    {
        $user = User::find($request->id);
        
        if (!$user) {
            return response()->json([
                "error" => "User not found",
            ], 404);
        }

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        return response()->json([
            "updated_user" => $user,
        ]);
    }

    public function delete_user(Request $request)
    {
        $user = User::find($request->id);

        if (!$user) {
            return response()->json([
                "error" => "User not found",
            ], 404);
        }

        $user->delete();

        return response()->json([
            "deleted_user" => $user,
        ]);
    }

    public function get_user(Request $request)
    {
        $user = User::find($request->id);

        if (!$user) {
            return response()->json([
                "error" => "User not found",
            ], 404);
        }

        return response()->json([
            "user" => $user,
        ]);
    }
}
