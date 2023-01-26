<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class EmailController extends Controller
{
    /**
     * Выводит всех юзеров списком
     * @return View
     */
    public function index(): View
    {
        return view('emails', [
            'users' => User::query()->get()
        ]);
    }
}
