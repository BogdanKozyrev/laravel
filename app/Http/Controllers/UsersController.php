<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::query()->get();
        dump($user->name);
        dump($user->email);
//        return 'Users';
    }
}
