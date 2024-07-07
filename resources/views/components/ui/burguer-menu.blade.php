<button id="burguer-menu" type="button">
    <img src="{{ $dark ? asset('/images/burguer-dark.svg') : asset('/images/burguer.svg') }}">
</button>

<div id="menu-mobile" class="xs:hidden w-full h-screen absolute top-0 left-0 bg-blue-500 flex justify-between flex-col px-[20px]">
    <div class="flex justify-end py-[27px]">
        <button id="close-mobile" type="button">
            <img src="{{ asset('/images/round-close.svg') }}">
        </button>
    </div>


    <div class="flex flex-col py-[34px] text-s2 font-black uppercase leading-[54px] gap-[14px]">
        <a href="{{ route('home') }}">
            <span class="{{ url()->current() === route('home') ? 'text-dark-blue-900' : 'text-white' }}">
                {{ __('menu.home') }}
            </span>
        </a>

        <a href="{{ route('philosophy') }}">
            <span class="{{ url()->current() === route('philosophy') ? 'text-dark-blue-900' : 'text-white' }}">
                {{ __('menu.philosophy') }}
            </span>
        </a>

        <a href="{{ route('sectors') }}">
            <span class="{{ url()->current() === route('sectors') ? 'text-dark-blue-900' : 'text-white' }} ">
                {{ __('menu.sectors') }}
            </span>
        </a>

        <a href="{{ route('services') }}">
            <span class="{{ url()->current() === route('services') ? 'text-dark-blue-900' : 'text-white' }} ">
                {{ __('menu.services') }}
            </span>
        </a>

        <a href="{{ route('experience') }}">
            <span class="{{ url()->current() === route('experience') ? 'text-dark-blue-900' : 'text-white' }} ">
                {{ __('menu.experience') }}
            </span>
        </a>

        <a href="{{ route('contact') }}">
            <span class="{{ url()->current() === route('contact') ? 'text-dark-blue-900' : 'text-white' }} ">
                {{ __('menu.contact') }}
            </span>
        </a>


        <a href="{{ route('news') }}">
            <span class="{{ url()->current() === route('news') ? 'text-dark-blue-900' : 'text-white' }} ">
                {{ __('menu.news') }}
            </span>
        </a>

    </div>

    <div class="flex py-[34px] text-s4 font-black uppercase gap-4 mb-[34px]">
        @foreach ($available_locales as $locale_name => $available_locale)
            @if ($available_locale === $current_locale)

                <span class="text-dark-blue-900">{{ $locale_name }}</span>

            @else

                <a href="/language/{{ $available_locale }}"><span class="text-white">{{ $locale_name }}</span></a>

            @endif
        @endforeach
    </div>
</div>
