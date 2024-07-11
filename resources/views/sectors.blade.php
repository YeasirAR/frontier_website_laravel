<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/sectors-animation.js')
    @vite('resources/js/button-scroll.js')
    <title>Sectors</title>
</head>

<body>
    <x-ui.layout :dark="false">
        {{-- Sección 1 --}}
        <x-ui.section height="min-h-screen" bg-position='xs:bg-[70%_bottom] md:bg-center' bg-img="bg-[url('/public/images/SECTORS_FRONTIER1.jpg')]">
            <div class="flex flex-col items-center h-full">
                <h1 class="md:text-h1 xs:text-s3 font-black text-white uppercase md:leading-[98px] xs:leading-[44px] md:mt-[363px] xs:mt-[292px]">{{ __('sectors.section1.title') }}</h1>

                <button type="button" id="button-scroll" class="md:mt-[279px] xs:mt-[418px]">
                    <img src="{{ asset('/images/frame.svg') }}">
                </button>
            </div>
        </x-ui.section>
        <div id="first-content">
            {{-- Sección 2 - Desktop --}}
            <div class="xs:hidden md:block">
                <img class="sticky top-0 h-screen w-full -z-[1]" src="{{ asset('/images/Section-01.jpg') }}" />
                <div class="flex xs:flex-col-reverse md:flex-row md:justify-evenly h-full text-center relative">
                    <div id="first-content-desktop" class="flex flex-col xs:mt-[69px] md:mt-[70px]">
                        <div class="max-w-[900px]">
                            <h1 class="md:text-s2 xs:text-s4 font-black text-black capitalize md:leading-[54px] xs:leading-[32px]">
                                {{ __('sectors.section2.title') }}
                            </h1>
                        </div>

                        <div class="max-w-[900px] mt-[40px] text-black xs:text-b1 md:text-s3 font-medium text-center md:leading-[44px] xs:leading-[24px]">
                            <p>{{ __('sectors.section2.subtitle1') }}</p>
                            <p class="xs:max-w-[350px] md:max-w-[668px] m-auto">{{ __('sectors.section2.subtitle2') }}</p>
                        </div>

                        <img class="m-[16px]" src="{{ asset('/images/map.svg') }}" />
                    </div>

                    <div class="xs:mt-[61px] md:mt-[70px]">
                        <div class="max-w-[900px]">
                            <h1 class="xs:text-s4 md:text-s2 font-black text-black  md:leading-[54px] xs:leading-[32px]">
                                {{ __('sectors.section2.title2') }}
                            </h1>
                        </div>

                        <div class="max-w-[900px] mt-[40px] text-black xs:text-b1 md:text-s3 font-medium text-center md:leading-[44px] xs:leading-[24px]">
                            <p>{{ __('sectors.section2.expertise1') }}</p>
                            <p>{{ __('sectors.section2.expertise2') }}</p>
                            <p>{{ __('sectors.section2.expertise3') }}</p>
                            <p>{{ __('sectors.section2.expertise4') }}</p>
                            <p>{{ __('sectors.section2.expertise5') }}</p>
                            <p>{{ __('sectors.section2.expertise6') }}</p>
                            <p>{{ __('sectors.section2.expertise7') }}</p>
                            <p>{{ __('sectors.section2.expertise8') }}</p>
                            <p>{{ __('sectors.section2.expertise9') }}</p>
                            <p>{{ __('sectors.section2.expertise10') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section 2 - Mobile --}}
            <x-ui.section height="h-full xs:block md:hidden" bg-img="md:bg-[url('/public/images/Section-01.jpg')] xs:bg-[url('/public/images/papel_web_1440x900-1.jpg')]">
                <div id="first-content-mobile" class="flex xs:flex-col-reverse md:flex-row md:justify-evenly h-full text-center xs:mt-[20vh] md:mt-[100vh] mb-[20vh]">
                    <div class="flex flex-col xs:mt-[69px] md:mt-[70px]">
                        <div class="max-w-[900px]">
                            <h1 class="md:text-s2 xs:text-s4 font-black text-black capitalize md:leading-[54px] xs:leading-[32px]">
                                {{ __('sectors.section2.title') }}
                            </h1>
                        </div>

                        <div class="max-w-[900px] mt-[40px] text-black xs:text-b1 md:text-s3 font-medium text-center md:leading-[44px] xs:leading-[24px]">
                            <p>{{ __('sectors.section2.subtitle1') }}</p>
                            <p class="xs:max-w-[350px] md:max-w-[668px] m-auto">{{ __('sectors.section2.subtitle2') }}</p>
                        </div>

                        <img class="m-[16px]" src="{{ asset('/images/map.svg') }}" />
                    </div>

                    <div class="xs:mt-[61px] md:mt-[70px]">
                        <div class="max-w-[900px]">
                            <h1 class="xs:text-s4 md:text-s2 font-black text-black  md:leading-[54px] xs:leading-[32px]">
                                {{ __('sectors.section2.title2') }}
                            </h1>
                        </div>

                        <div class="max-w-[900px] mt-[40px] text-black xs:text-b1 md:text-s3 font-medium text-center md:leading-[44px] xs:leading-[24px]">
                            <p>{{ __('sectors.section2.expertise1') }}</p>
                            <p>{{ __('sectors.section2.expertise2') }}</p>
                            <p>{{ __('sectors.section2.expertise3') }}</p>
                            <p>{{ __('sectors.section2.expertise4') }}</p>
                            <p>{{ __('sectors.section2.expertise5') }}</p>
                            <p>{{ __('sectors.section2.expertise6') }}</p>
                            <p>{{ __('sectors.section2.expertise7') }}</p>
                            <p>{{ __('sectors.section2.expertise8') }}</p>
                            <p>{{ __('sectors.section2.expertise9') }}</p>
                            <p>{{ __('sectors.section2.expertise10') }}</p>
                        </div>
                    </div>
                </div>
            </x-ui.section>
        </div>

        {{-- Section 3 --}}
        <x-ui.section id="section-3" height="h-full xs:block md:hidden" bg-position="" bg-img="md:bg-[url('/public/images/Section-2.jpg')] xs:bg-[url('/public/images/papel_web_1440x900-1.jpg')]">
            <div id="container-3" class="justify-center mb-24 mt-[100vh] xs:hidden md:flex">
                <img src="{{ asset('images/group.png') }}" />
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>