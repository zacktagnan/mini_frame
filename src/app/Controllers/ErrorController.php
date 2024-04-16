<?php

namespace App\Controllers;

use Illuminate\View\Factory;

class ErrorController
{
    public function errorNotFound(Factory $factory)
    {
        // echo 'ERROR 404 - Ruta NO encontrada [ErrorController]';
        // ------------------------------------------------------------
        echo $factory->make('error.index', [
            'errorCode' => 404,
            'errorMsg' => 'Ruta NO encontrada',
        ]);
    }

    public function errorMethodNotAllowed(Factory $factory)
    {
        // echo 'ERROR 405 - Método HTTP NO permitido [ErrorController]';
        // ------------------------------------------------------------
        echo $factory->make('error.index', [
            'errorCode' => 405,
            'errorMsg' => 'Método HTTP NO permitido',
        ]);
    }
}
