<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/news.js')
    <title>News</title>
</head>

<body>
    <x-ui.layout :dark="true">
        {{-- Sección 1 --}}
        <x-ui.section height="h-full" bg-img="bg-[url('/public/images/PAPER_BG_FRONTIER.jpg')]">
            <div class="flex flex-col md:mt-[57px] xs:mt-[180px] items-center w-full text-center relative xs:min-h-[calc(100vh-187px)] md:min-h-[calc(100vh-66px)]">

                <div class="max-w-[900px] md:h-[98px] xs:h-[44px] xs:mb-[44px] md:mb-[36px]">
                    <h1 class="md:text-h1 xs:text-s3 font-black text-black uppercase">{{ __('news.section1.title') }}
                    </h1>
                </div>

                <div class="md:px-[112px] w-full">
                    @foreach ($posts as $post)
                        <div class="{{ $loop->first ? '' : 'border-t-[1px]' }} md:border-t-[1px] border-black md:py-[24px] md:pl-[22px] xs:pt-[21px] xs:pb-[25px] {{ $loop->last ? 'border-b-[1px]': '' }} ">
                            <x-news.card :post="$post" />
                        </div>
                    @endforeach
                </div>
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>
