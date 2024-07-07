<nav style="writing-mode: vertical-rl;" class="fixed w-[38px] flex flex-col h-full z-10 right-0 xs:hidden md:block">
    <ul class="rotate-180 w-full">
        <li class="flex flex-row-reverse w-full gap-[2px] text-b3 font-medium">
            <x-ui.link :dark="$dark" text-color="text-dark-blue-900" bg-color="bg-light-blue-500" route="{{ route('home') }}" show-icon="{{ url()->current() === route('home') }}">
                {{ __('menu.home') }}
            </x-ui.link>

            <x-ui.link :dark="$dark" text-color="text-dark-blue-900" bg-color="bg-light-blue-650" route="{{ route('philosophy') }}" show-icon="{{ url()->current() === route('philosophy') }}">
                {{ __('menu.philosophy') }}
            </x-ui.link>

            <x-ui.link :dark="$dark" text-color="text-dark-blue-900" bg-color="bg-light-blue-500" route="{{ route('sectors') }}" show-icon="{{ url()->current() === route('sectors') }}">
                {{ __('menu.sectors') }}
            </x-ui.link>

            <x-ui.link :dark="$dark" text-color="text-white" bg-color="bg-blue-500" route="{{ route('services') }}" show-icon="{{ url()->current() === route('services') }}">
                {{ __('menu.services') }}
            </x-ui.link>

            <x-ui.link :dark="$dark" text-color="text-white" bg-color="bg-blue-600" route="{{ route('experience') }}" show-icon="{{ url()->current() === route('experience') }}">
                {{ __('menu.experience') }}
            </x-ui.link>

            <x-ui.link :dark="$dark" text-color="text-white" bg-color="bg-blue-650" route="{{ route('contact') }}" show-icon="{{ url()->current() === route('contact') }}">
                {{ __('menu.contact') }}
            </x-ui.link>

            <x-ui.link :dark="$dark" text-color="text-white" bg-color="bg-dark-blue-500" route="{{ route('news') }}" show-icon="{{ str_contains(url()->current(), route('news')) }}">
                {{ __('menu.news') }}
            </x-ui.link>
        </li>
    </ul>
</nav>
