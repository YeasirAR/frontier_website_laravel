<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/button-scroll.js') }}"></script>
    <title>Home</title>
    <style>
        #section2 {
            margin-top: 40lvh;
            margin-bottom: 40lvh;
        }

        #section3 {
            margin-top: 10lvh;
        }

        .bg-center {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <x-ui.layout :dark="false">
        {{-- Sección 1 -- Desktop --}}
        <x-ui.section height="min-h-lvh xs:hidden md:block" bg-img="bg-[url('/public/images/HOME_FRONTIER1.jpg')] bg-center">
            <div class="flex flex-col items-center h-full text-center relative">

                <div class="md:mt-[307px] xs:mt-[194px] md:leading-[98px] xs:leading-[88px]">
                    <h1 class="md:text-h1 xs:text-h2 font-black text-white uppercase xs:hidden md:block">{!! __('home.section1.title.desktop') !!}</h1>
                    <h1 class="md:text-h1 xs:text-h2 font-black text-white uppercase xs:blocl md:hidden">{!! __('home.section1.title.mobile') !!}</h1>
                </div>

                <div class="mt-[40px] text-white xs:text-b2 md:text-b1 text-center font-medium md:leading-6 xs:leading-[22px]">
                    <p class="xs:hidden md:block">{!! __('home.section1.subtitle.desktop') !!}</p>
                    <p class="xs:block md:hidden">{!! __('home.section1.subtitle.mobile') !!}</p>
                </div>

                <button type="button" id="button-scroll" class="md:mt-[223px] xs:mt-[114px]">
                    <img class="xs:w-[47.85px] xs:h-[50.72px] md:w-full md:h-full" src="{{ asset('/images/frame.svg') }}">
                </button>
            </div>
        </x-ui.section>

        {{-- Sección 1 -- Mobile --}}
        <x-ui.section height="min-h-lvh xs:block md:hidden" bg-img="bg-[url('/public/images/HOME_FRONTIER1_mobile.jpg')] bg-center">
            <div class="flex flex-col items-center h-full text-center relative">

                <div class="md:mt-[307px] xs:mt-[194px] md:leading-[98px] xs:leading-[88px]">
                    <h1 class="md:text-h1 xs:text-h2 font-black text-white uppercase xs:hidden md:block">{!! __('home.section1.title.desktop') !!}</h1>
                    <h1 class="md:text-h1 xs:text-h2 font-black text-white uppercase xs:blocl md:hidden">{!! __('home.section1.title.mobile') !!}</h1>
                </div>

                <div class="mt-[40px] text-white xs:text-b2 md:text-b1 text-center font-medium md:leading-6 xs:leading-[22px]">
                    <p class="xs:hidden md:block">{!! __('home.section1.subtitle.desktop') !!}</p>
                    <p class="xs:block md:hidden">{!! __('home.section1.subtitle.mobile') !!}</p>
                </div>

                <button type="button" id="button-scroll" class="md:mt-[223px] xs:mt-[114px]">
                    <img class="xs:w-[47.85px] xs:h-[50.72px] md:w-full md:h-full" src="{{ asset('/images/frame.svg') }}">
                </button>
            </div>
        </x-ui.section>

        {{-- Sección 2 -- Desktop --}}
        <div id="first-content">
        <x-ui.section height="h-full xs:hidden md:block" bg-img="bg-[url('/public/images/HOME_FRONTIER2.jpg')] bg-center">
            <div id="section2"class="flex flex-col justify-center items-center h-full text-center relative">
                <h1 class="md:text-h3 xs:text-s3 font-black text-white uppercase md:leading-[78px] xs:leading-[44px]">{!! __('home.section2.title') !!}</h1>

                <div class="mt-[40px] text-white text-b1 font-medium text-center leading-6">
                    <p class="xs:hidden md:block">{!! __('home.section2.subtitle.desktop') !!}</p>
                    <p class="xs:block md:hidden">{!! __('home.section2.subtitle.mobile') !!}</p>
                </div>
            </div>
        </x-ui.section>
        {{-- Sección 2 -- Mobile --}}
        <x-ui.section height="h-full xs:block md:hidden" bg-img="bg-[url('/public/images/HOME_FRONTIER2_mobile.jpg')] bg-center">
            <div id="section2"class="flex flex-col justify-center items-center h-full text-center relative">
                <h1 class="md:text-h3 xs:text-s3 font-black text-white uppercase md:leading-[78px] xs:leading-[44px]">{!! __('home.section2.title') !!}</h1>

                <div class="mt-[40px] text-white text-b1 font-medium text-center leading-6">
                    <p class="xs:hidden md:block">{!! __('home.section2.subtitle.desktop') !!}</p>
                    <p class="xs:block md:hidden">{!! __('home.section2.subtitle.mobile') !!}</p>
                </div>
            </div>
        </x-ui.section>
        
        {{-- Sección 3 -- Desktop--}}
        <x-ui.section height="h-[150vh] xs:hidden md:block" bg-img="bg-[url('/public/images/PANO0004.jpg')] bg-center">
            <div class="relative mt-[35vh] xs:text-center md:text-left">
                <div
                    class="xs:hidden md:block absolute top-[15px] left-[415px]">
                    <img class="w-[850px] h-[733px]" src="{{ asset('/images/line-section-3.svg') }}">
                </div>

                <div
                    class="xs:block md:hidden absolute top-[217px] left-[273px] h-full">
                    <img class="w-[79.35px] h-[372.11px]" src="{{ asset('/images/line-section-3-mobile.svg') }}">
                </div>

                <div class="absolute md:left-[135px] xs:left-[0px] md:top-[129px] xs:top-[144px] md:w-[555px] xs:w-[350px] xs:h-[88px] md:h-full md:leading-[78px] xs:leading-[44px]">
                    <p class="uppercase md:text-h3 xs:text-s3 font-black text-white">{{ __('home.section3.p1') }}</p>
                    <p class="uppercase md:text-h3 xs:text-s3 font-black text-white">{{ __('home.section3.p2') }}</p>
                </div>

                <div class="absolute md:left-[135px] md:top-[315px] xs:left-[0px] xs:top-[440px] md:w-[555px] xs:w-[350px] xs:h-[88px] md:h-full md:leading-[30px] xs:leading-[44px]">
                    <p class="capitalize text-white md:text-s1 xs:text-s3 font-bold">{{ __('home.section3.p3') }}</p>
                </div>

                <div class="absolute xs:left-[0px] md:left-[135px] md:top-[632px] xs:top-[514px] md:w-[555px] md:h-[126px] xs:w-[350px] xs:h-[88px] md:leading-[63px] xs:leading-[44px]">
                    <p class="capitalize text-white md:text-s1 xs:text-s3 font-bold">{{ __('home.section3.p4') }}</p>
                    <p class="capitalize text-white md:text-s1 xs:text-s3 font-bold">{{ __('home.section3.p5') }}</p>
                </div>
            </div>
        </x-ui.section>
        {{-- Sección 3 -- Mobile--}}
        <x-ui.section height="h-[150vh] xs:block md:hidden" bg-img="bg-[url('/public/images/PANO0004_mobile.jpg')] bg-center">
            <div class="relative mt-[25vh] xs:text-center md:text-left">
                <div
                    class="xs:hidden md:block absolute top-[15px] left-[417px]">
                    <img class="w-[850px] h-[731px]" src="{{ asset('/images/line-section-3.svg') }}">
                </div>

                <div
                    class="xs:block md:hidden absolute top-[216px] left-[269px] h-full">
                    <img src="{{ asset('/images/line-section-3-mobile.svg') }}">
                </div>

                <div class="absolute md:left-[135px] xs:left-[0px] md:top-[129px] xs:top-[144px] md:w-[555px] xs:w-[350px] xs:h-[88px] md:h-full md:leading-[78px] xs:leading-[44px]">
                    <p class="uppercase md:text-h3 xs:text-s3 font-black text-white">{{ __('home.section3.p1') }}</p>
                    <p class="uppercase md:text-h3 xs:text-s3 font-black text-white">{{ __('home.section3.p2') }}</p>
                </div>

                <div class="absolute md:left-[135px] md:top-[315px] xs:left-[0px] xs:top-[440px] md:w-[555px] xs:w-[350px] xs:h-[88px] md:h-full md:leading-[30px] xs:leading-[44px]">
                    <p class="capitalize text-white md:text-s1 xs:text-s3 font-bold">{{ __('home.section3.p3') }}</p>
                </div>

                <div class="absolute xs:left-[0px] md:left-[135px] md:top-[632px] xs:top-[514px] md:w-[555px] md:h-[126px] xs:w-[350px] xs:h-[88px] md:leading-[63px] xs:leading-[44px]">
                    <p class="capitalize text-white md:text-s1 xs:text-s3 font-bold">{{ __('home.section3.p4') }}</p>
                    <p class="capitalize text-white md:text-s1 xs:text-s3 font-bold">{{ __('home.section3.p5') }}</p>
                </div>
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>
