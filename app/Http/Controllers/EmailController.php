<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class EmailController extends Controller
{
    /**
     * Выводит електронные почты списком
     * @return View
     */
    public function emails():View
    {
        return view('emails', [
            'users' => User::query()->get()
        ]);
    }
}
