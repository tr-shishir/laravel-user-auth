<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNull('approved_by')->get();
        return view('user', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $admin = User::select('id')->where('admin',1)->first();
        $user->update(['approved_by' => $admin->id]);

        return redirect()->route('users.index')->withMessage('User approved successfully');
    }

    public function delete($user_id)
    {
        User::destroy($user_id);
        return redirect()->route('users.index')->withMessage('User deleted successfully');
    }
}
