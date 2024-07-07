<div class="fixed top-0 flex items-start z-10 md:w-[calc(100%-38px)] xs:w-full md:px-[40px] md:py-[40px] xs:py-[51px] xs:px-[20px]">
    {{-- Logo Desktop --}}
    <div class="xs:hidden md:block">
        <img src="{{ $dark ? asset('/images/Header-dark.svg') :  asset('/images/header.svg') }}">
    </div>

    <div class="xs:hidden flex-1 md:block"></div>

    {{-- Switch Language --}}
    <div class="md:w-[145px] xs:hidden md:block">
        <x-ui.language-switch :dark="$dark" />
    </div>

    {{-- Logo mobile --}}
    <div class="xs:block md:hidden absolute left-[calc(50%-35px)]">
        <img src="{{ $dark ? asset('/images/icon_color.svg') : asset('/images/icon_white.svg') }}">
    </div>

    <div class="xs:block flex-1 md:hidden"></div>

    {{-- Burguer Menu Mobile --}}
    <div class="xs:block md:hidden">
        <x-ui.burguer-menu :dark="$dark" />
    </div>
</div>
