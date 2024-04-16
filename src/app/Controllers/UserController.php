<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\View\Factory;

class UserController
{
    public function index(Factory $factory): void
    {
        $users = User::all();
        echo $factory->make('users.index', compact('users'));
    }
}
