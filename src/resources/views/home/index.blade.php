@extends('layouts.general')

@php
    $titlePage = 'Inicio :: INDEX';
@endphp

@section('titlePage', $titlePage)

@section('header')
    <h1 class="text-2xl font-bold leading-tight text-black dark:text-gray-400">
        {{ $titlePage }}
    </h1>
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col w-full bg-white border border-gray-200 rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="p-4 bg-[#223f5d] rounded-t-lg md:rounded-none md:rounded-s-lg w-full md:w-96">
                            <img class="object-cover w-full h-auto rounded-t-lg md:w-96 md:rounded-none md:rounded-s-lg"
                            src="/img/logo-sin.fondo.png" alt="Logo" />
                        </div>

                        <div class="flex flex-col w-full leading-normal p-11">
                            <h2 class="text-xl font-bold leading-tight text-black dark:text-gray-400">Aloha!!</h2>

                            <p class="mt-4 text-justify"><strong>miniFrame</strong> es un proyecto que trata de mostrar que se puede llegar a construir un <em>Framework</em>, desde cero, empleando buenas prácticas.</p>

                            <p class="mt-4 text-justify">Además, se quiere demostrar que el desarrollo puede ser llevado a cabo sin necesidad de tener determinadas herramientas instaladas en el equipo local, favoreciendo el uso de servicios ofrecidos gracias a herramientas de virtualización como son <a href="https://www.docker.com/" target="_blank" class="hover:underline" title="Docker"><strong>Docker</strong></a> y <a href="https://docs.docker.com/compose/" target="_blank" class="hover:underline" title="Docker Compose"><strong>Docker Compose</strong></a>, sea cuál sea el sistema operativo disponible en el equipo.</p>

                            <p class="mt-4 text-justify">Tomando como inspiración inicial un framework como el de <a href="https://laravel.com/" target="_blank" class="hover:underline" title="Laravel"><strong>Laravel</strong></a>, se muestra como se pueden emplear herramientas empleadas en este tipo de grandes desarrollos dentro de uno personalizado como éste sin tener que reinventar la rueda.</p>

                            <p class="mt-4 text-justify">Algunas herramientas serán instaladas como dependencias de proyecto, otras serán arrancadas por medio de servicios de contenedores.<br>
                            Entre unas y otras, varias de las disponibles son las siguientes:</p>

                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <ul class="mx-6">
                                    <li class="list-disc">
                                        <a href="https://www.nginx.com/" target="_blank" class="hover:underline" title="NGiNX">
                                        <strong>NGiNX</strong></a>, como servidor web.
                                    </li>
                                    <li class="list-disc">
                                        <a href="https://www.php.net/manual/es/install.fpm.php" target="_blank" class="hover:underline" title="PHP-FPM"><strong>PHP-FPM</strong></a>, procesos para PHP (v8.x).
                                    </li>
                                    <li class="list-disc">
                                        <a href="https://www.mysql.com/" target="_blank" class="hover:underline" title="MySQL">
                                        <strong>MySQL</strong></a>, como servidor web.
                                    </li>
                                    <li class="list-disc">
                                        <a href="https://mailpit.axllent.org/" target="_blank" class="hover:underline" title="Mailpit">
                                        <strong>Mailpit</strong></a>, como servidor de correo.
                                    </li>
                                </ul>
                                <ul class="mx-6">
                                    <li class="list-disc">
                                        <a href="https://php-di.org/" target="_blank" class="hover:underline" title="PHP-DI"><strong>PHP-DI</strong></a>, aplicando Inyección de Dependencias.
                                    </li>
                                    <li class="list-disc">
                                        <a href="https://laravel.com/docs/11.x/eloquent" target="_blank" class="hover:underline" title="Eloquent ORM"><strong>Eloquent ORM</strong></a>, conectando con base de datos.
                                    </li>
                                    <li class="list-disc">
                                        <a href="https://github.com/nikic/FastRoute" target="_blank" class="hover:underline" title="FastRoute"><strong>FastRoute</strong></a>, sistema de rutas.
                                    </li>
                                    <li class="list-disc">
                                        <a href="https://phinx.org/" target="_blank" class="hover:underline" title="Phinx"><strong>Phinx</strong></a>, migraciones y seeders.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
