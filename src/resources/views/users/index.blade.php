@extends('layouts.general')

@php
    $titlePage = 'Usuarios :: INDEX';
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
                    <div class="flex justify-between">
                        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Listado de Usuarios Registrados - <span class="text-sm">({{ $users->count() }} en total)</span></h2>

                        <a href="#"
                            title="Nuevo registro"
                            class="px-3 pt-1 pb-2 font-bold text-white bg-[#223f5d] rounded hover:bg-[#5eb6dc] transition duration-150 ease-in-out">
                            <span>+</span>
                        </a>
                    </div>


                    @if ($users->isEmpty())

                        <p class="relative px-4 py-3 mt-4 text-center text-red-700 bg-red-100 border border-red-400 rounded"
                            role="alert">
                            <strong class="font-bold">¡Lo sentimos!</strong>
                            <span class="block sm:inline">No hay registros disponibles = Listado vacío</span>
                        </p>

                    @else

                        <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2">

                            @foreach ($users as $user)
                                @php
                                    $userId = $user->id;
                                    if ($user->id < 10) {
                                        $userId='0' . $user->id;
                                    }
                                @endphp
                                <div
                                    class="relative flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img
                                        class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="/img/default_user.png"
                                        alt="{{ $user->name }}"
                                    />

                                    <div class="flex flex-col w-full p-4 leading-normal">
                                        <h5 class="text-[1.28rem] font-bold tracking-tight text-gray-900 dark:text-white">
                                            <span class="text-[1rem]">[ {{ $userId }} ]</span> - {{ $user->name }}
                                        </h5>

                                        <hr class="my-3">

                                        <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                                            <strong>{{ 'Email' }}:</strong> {{ $user->email }}
                                        </p>

                                        <div class="absolute bottom-0 right-0 flex justify-between p-4">
                                            <a href="#"
                                                class="p-1 mb-2 font-bold text-center text-white bg-purple-500 rounded hover:bg-purple-700 md:mb-0">
                                                {{ 'Editar' }}
                                            </a>
                                            <form action="#" method="POST">
                                                {{-- @csrf
                                                @method('DELETE') --}}
                                                <button
                                                    class="w-full p-1 font-bold text-white bg-red-500 rounded hover:bg-red-700 md:w-auto ms-2"
                                                    onclick="return confirm('{{ '¿En verdad se desea ELIMINAR este registro?' }}')">
                                                    {{ 'Eliminar' }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
