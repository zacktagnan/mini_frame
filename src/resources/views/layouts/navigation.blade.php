<nav x-data="{ open: false }" class="bg-[#223f5d] border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="/" title="Ir a HOME">
                        @include('components.application-logo')
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @include('components.nav-link', [
                        'route' => '/',
                        'text' => 'Inicio',
                    ])
                    @include('components.nav-link', [
                        'route' => '/users',
                        'text' => 'Usuarios',
                    ])
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @include('components.dropdown', [
                    'align' => 'right',
                    'width' => '48',
                    'contentClasses' => 'py-1 bg-white',
                ])
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @include('components.responsive-nav-link', [
                'route' => '/',
                'text' => 'Inicio',
            ])
            @include('components.responsive-nav-link', [
                'route' => '/users',
                'text' => 'Usuarios',
            ])
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="text-base font-medium text-[#5eb6dc]">{{ 'Nombre de Usuario' }}</div>
                <div class="text-sm font-medium text-[#4d7ecc]">{{ 'Email de Usuario' }}</div>
            </div>

            <div class="mt-3 space-y-1">
                @include('components.responsive-nav-link', [
                    'route' => '/profile',
                    'text' => 'Perfil'
                ])

                <!-- Authentication -->
                <form method="POST" action="/logout">
                    {{-- @csrf --}}

                    <a href="/logout" title="Cerrar sesión" class="block w-full py-2 text-base font-medium text-[#4d7ecc] transition duration-150 ease-in-out border-l-4 border-transparent ps-3 pe-4 text-start hover:text-red-400 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300" onclick="event.preventDefault(); this.closest('form').submit();">
                        Cerrar sesión
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
