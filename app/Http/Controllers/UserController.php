<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::with('posts')->findOrFail($id);
        return Inertia::render('User/UserPage', [
            'user' => $user,
        ]);
    }
}
