<div class="xs:min-h-[187px] md:min-h-[66px] bg-dark-blue-900 md:px-[90px] xs:py-[20px] xs:px-[60px] md:py-[10px] flex items-center xs:flex-col md:flex-row">
    {{-- Logo --}}
    <div class="text-white flex gap-[10px] items-center xs:flex-col md:flex-row">
        <img src="{{ asset('/images/icon_color.svg') }}" class="w-[38px] h-[47px]">

        <p class="xs:max-w-[255px] md:max-w-full xs:text-center">
            {{ html_entity_decode( __('footer.rights') ) }}
        </p>
    </div>
    <div class="flex-1">
    </div>
    {{-- Contact --}}
    <div class="text-white flex xs:w-full md:w-auto gap-[55px] md:items-center justify-between">
        <a href="{{ route('contact') }}">
            <span>{{ __('footer.contact') }}</span>
        </a>

        <div class="flex gap-1">
            <p>{{ __('footer.follow') }}</p>
            <a class="underline" href="https://www.linkedin.com/company/frontier-advisory-ltd/?originalSubdomain=mx" target="_blank">{{ __('footer.linkedin') }}</a>
        </div>
    </div>
</div>
