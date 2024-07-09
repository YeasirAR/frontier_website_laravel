<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/news.js')

    <title>News - {{ strlen($post->title) > 15 ? substr($post->title, 0, 15).'...' : $post->title }}</title>
</head>

<body>
    <x-ui.layout :dark="true">
        <x-ui.section height="h-full" bg-img="bg-[url('/public/images/PAPER_BG_FRONTIER.jpg')]">
            <div class="flex flex-col items-center xs:min-h-[calc(100vh-187px)] md:min-h-[calc(100vh-66px)] mb-4">
                <a class="mt-[119px] self-start ml-[20px] text-b3 font-medium text-black" href="{{ route('news') }}">
                    Go back
                </a>

                <div class="md:w-[1130px] h-full flex flex-col">

                    @if ($post->featured_image)
                        <img class="w-[1126px] h-[237px] mt-[26px] rounded-[10px] mx-auto object-cover" src="{{ asset($post->featured_image) }}">
                    @endif

                    {{-- Data --}}
                    <span class="text-b1 font-black mt-[38px]">
                        {{ $post->created_at }}
                    </span>

                    <p class="xs:text-b1 md:text-s4 font-medium leading-[32px] text-left mt-[22px]">
                        {{ $post->title }}
                    </p>

                    <p class="mt-[23px] text-b3 font-medium text-black leading-[20px]">
                        {!! $post->body !!}
                    </p>
                </div>
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>
