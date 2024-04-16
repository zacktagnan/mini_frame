<?php

namespace App\Controllers;

use Illuminate\View\Factory;

class HomeController
{
    public function index(Factory $factory): void
    {
        // SIN vista(s)
        // echo 'ALOHA!! ...desde HomeController@index :)';
        // ------------------------------------------------------------
        // CON vista(s)
        // echo $factory->make('home');
        echo $factory->make('home.index');
    }
}
