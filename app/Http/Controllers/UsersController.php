<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Выводит всех юзеров списком
     * @return View
     */
    public function index(): View
    {
        return view('users', [
            'users' => User::query()->get()
        ]);
    }
}
