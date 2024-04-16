@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <button
            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
            <div>Usuario Autenticado</div>

            <div class="ms-1">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </button>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}" style="display: none;"
        @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            @include('components.dropdown-link', [
                'route' => '/profile',
                'text' => 'Perfil',
            ])

            <!-- Authentication -->
            <form method="POST" action="/logout">
                {{-- @csrf --}}

                <a href="/logout"
                    class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out text-start hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    title="Cerrar sesión" onclick="event.preventDefault(); this.closest('form').submit();">
                    Cerrar sesión
                </a>
            </form>
        </div>
    </div>
</div>
