<div class="flex xs:flex-col md:flex-row md:items-center gap-4">
    {{-- Image --}}
    <div class="rounded-[10px] xs:hidden {{ $post->featured_image ? 'md:block' : '' }} ">
        <img class="w-[210px] h-[109px]" src="{{ asset($post->featured_image) }}" />
    </div>

    {{-- data --}}
    <div class="flex flex-col justify-start items-start leading-[24px] text-black ">
        <span class="text-b1 font-black">
            {{ $post->created_at }}
        </span>
        <p class="xs:text-b1 md:text-s4 font-medium leading-[32px] text-left">
            {{ $post->title }}
        </p>
    </div>

    <div class="flex-1"></div>

    {{-- Button --}}
    <a class="xs:w-full md:w-[210px]" href="{{ route('news.show', ['slug' => $post->slug]) }}">
        <button
            class="flex gap-x-[10px] items-center justify-center xs:w-full md:h-[48px] xs:h-[46px] p-[13px] bg-light-blue-500 hover:bg-dark-blue-300 disabled:bg-dark-blue-50 disabled:text-dark-blue-100 disabled:line-through">
            <span class="text-b3 font-black text-dark-blue-900">Read More</span>
            <img src="{{ asset('/images/news-button-icon.svg') }}" />
        </button>
    </a>
</div>
