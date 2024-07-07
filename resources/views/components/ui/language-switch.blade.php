<div id="switch-menu" class="top-[31px] xl:right-[10%] lg:right-[15%] md:block xs:hidden">
    <span class="{{ $dark ? 'text-dark-blue-900' : 'text-white' }} uppercase text-b1 font-medium cursor-pointer">{{ $current_locale }}</span>
</div>

{{-- Switch Language --}}
<div id="language-menu" class="top-[61px] xl:right-[calc(10%-95px)] lg:right-[calc(15%-95px)] hidden">
    <div class="w-[120px] bg-white rounded px-[10px] py-[6px]">
        <ul class="uppercase flex flex-col gap-2">
            @foreach ($available_locales as $locale_name => $available_locale)
                @if ($available_locale === $current_locale)
                    <li class="bg-dark-blue-50 text-dark-blue-600 font-black text-b3">
                        <span>{{ $locale_name }}</span>
                    </li>

                @else
                    <li class="text-b3 font-medium hover:bg-dark-blue-50">
                        <a href="/language/{{ $available_locale }}"><span>{{ $locale_name }}</span></a>
                    </li>
                @endif

            @endforeach
        </ul>
    </div>
</div>
