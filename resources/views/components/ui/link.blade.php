<div class="flex-1 flex relative">
    <img class="absolute rotate-180 top-1/2 left-[50px] {{ $showIcon ? "block" : 'hidden' }}" src="{{ $dark ? asset('/images/icono-menu-black.svg') : asset('/images/ICONO-MENU.svg') }}" />

    <a class="capitalize flex-1 flex items-center justify-center {{ $bgColor }} {{ $textColor }} hover:bg-light-blue-100" href="{{ $route }}">
        {{ $slot }}
    </a>
</div>
