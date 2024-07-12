<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/button-scroll.js')
    <title>Philosophy</title>
</head>

<body>
    <x-ui.layout :dark="false">
        {{-- Sección 1 --}}
        <x-ui.section height="min-h-screen" bg-position='xs:bg-[25%_bottom] md:bg-center' bg-img="bg-[url('/public/images/PHILOSOPHY_FRONTIER1.jpg')]">
            <div class="flex flex-col items-center h-full text-center relative">
                <div class="md:mt-32 xs:mt-[252px]">
                    <h1 class="md:text-h1 xs:text-s3 font-black text-white uppercase md:mb-0 md:leading-[98px] xs:leading-[44px]">
                        {{ __('philosophy.section1.title') }}
                    </h1>
                </div>

                <div class="max-w-[calc(100%-38px)] mt-[40px] text-white xs:text-b2 md:text-b1 text-center font-medium xs:hidden md:block leading-6">
                    <p>{!! __('philosophy.section1.subtitle.desktop') !!}</p>
                </div>

                <button type="button" id="button-scroll" class="md:mt-[398px] xs:mt-[468px]">
                    <img class="xs:w-[47.85px] xs:h-[50.72px] md:w-full md:h-full" src="{{ asset('/images/frame.svg') }}">
                </button>
            </div>
        </x-ui.section>

        {{-- Sección 2 --}}
        <div id="first-content">
        <x-ui.section height="h-full" bg-img="bg-[url('/public/images/PAPER_BG_FRONTIER.jpg')]">
            <div class="flex flex-col items-center h-full">
                <div class="flex flex-col items-center h-full mb-[20vh]">

                    <div class="mt-[22px] flex xs:flex-col md:flex-row items-start gap-8 md:w-[648px] md:mx-auto">
                        <div class="flex justify-center xs:w-full md:w-max">
                            <img class="xs:w-[169px] xs:h-[131px] md:max-w-[145px] md:max-h-[112px] md:-ml-[35%]" src="{{ asset('/images/circles-phi-section2.svg') }}" />
                        </div>

                        <div class="max-w-[900px] md:-ml-[20px] mt-[10px]">
                            <h1 class="md:text-s3 xs:text-s4 font-black text-black capitalize md:leading-[44px] xs:leading-[32px]">
                                {{ __('philosophy.section2.title') }}
                            </h1>
                        </div>
                    </div>

                    <div class="text-black text-b3 font-medium text-center leading-5 xs:mt-[15px] md:mt-0">
                        <p class="xs:hidden md:block">{!! __('philosophy.section2.subtitle1.desktop') !!}</p>
                        <p class="xs:block md:hidden">{!! __('philosophy.section2.subtitle1.mobile') !!}</p>
                    </div>

                    <div class="mt-[93px] xs:hidden md:block">
                        <img class="max-w-[756.15px] max-h-[565.16px]" src="{{ asset('/images/grafico.png') }}" />
                    </div>

                    <div class="md:mt-[112px] xs:mt-[121px] max-w-[calc(100%-38px)] xs:flex-col md:flex-col-reverse items-center flex">
                        <img class="max-w-[233px] max-h-[76px] md:my-[25px]" src="{{ asset('/images/balancing-act.svg') }}" />

                        <div class="max-w-[670px] xs:my-[15px]">
                            <h1 class="md:text-s3 xs:text-s4 font-black text-black capitalize md:leading-[44px] xs:leading-[32px] text-center">
                                {{ __('philosophy.section2.title2') }}
                            </h1>
                        </div>
                    </div>

                    <div class="text-black text-b3 font-medium text-center leading-5">
                        <p class="xs:hidden md:block">{!! __('philosophy.section2.subtitle2.desktop') !!}</p>
                        <p class="xs:block md:hidden">{!! __('philosophy.section2.subtitle2.mobile') !!}</p>
                    </div>
                </div>
            </div>
        </x-ui.section>
        </div>
        {{-- Sección 3 --}}
        <x-ui.section height="h-[250vh]" bg-img="bg-[url('/public/images/PANO0004.jpg')]">
            <div class="relative mt-[100vh] xs:text-center md:text-left">
                <div
                    class="xs:hidden md:block absolute top-[15px] left-[417px]">
                    <img class="w-[850px] h-[731px]" src="{{ asset('/images/line-section-3.svg') }}">
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
    </x-ui.layout>
</body>

</html>
