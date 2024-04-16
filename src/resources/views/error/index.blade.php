@extends('layouts.general')

@php
    $titlePage = 'Error :: INDEX';
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
                            <h2 class="text-xl font-bold leading-tight text-red-400 dark:text-gray-400">ERROR {{ $errorCode }}</h2>

                            <p class="text-center text-white bg-red-400 rounded-lg mt-11">:: {{ $errorMsg }} ::</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
