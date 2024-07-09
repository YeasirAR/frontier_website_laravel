<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/services-animation.js')
    <title>Services</title>
    <style>
        #slider-container {
            display: flex;
            width: 5371px;
        }
    </style>
</head>

<body>
    <x-ui.layout :dark="false">
        {{-- Sección 1 --}}
        <x-ui.section height="h-screen" bg-img="bg-[url('/public/images/_MG_8629-desktop.jpg')]">
            <div class="flex flex-col items-center xs:justify-end md:justify-center h-full text-center relative">
                <h1 class="md:text-h1 xs:text-s3 font-black text-white uppercase md:leading-[98px] xs:leading-[44px]">{{ __('services.section1.title') }}</h1>

                <div class="text-white xs:text-s3 md:text-h1 text-center font-black xs:mb-[154px] md:mb-0 md:leading-[134px] xs:leading-[44px]">
                    <p class="md:text-[110px]">{{ __('services.section1.subtitle1') }}</p>
                    <p>{{ __('services.section1.subtitle2') }}</p>
                </div>
            </div>

            <div class="absolute bottom-[38.28px] left-[calc(50%-31px)]">
                <button type="button" id="button-scroll">
                    <img src="{{ asset('images/frame.svg') }}">
                </button>
            </div>
        </x-ui.section>

        {{-- Sección 2 --}}
        <x-ui.section height="h-full"  bg-img="bg-[url('/public/images/papel_web_1440x900-1.jpg')]">
            <div id="first-content" class="flex flex-col text-center">
                <div class="md:text-start text-dark-blue-900 font-black mx-auto md:leading-[78px] xs:[44px]">
                    <h3 class="xs:text-s3 md:text-h3 uppercase">
                        {{ __('services.section2.title') }}
                    </h3>

                    <p class="xs:text-b2 md:text-s3">{{ __('services.section2.subtitle') }}</p>
                </div>

                <div class="overflow-hidden mt-[57px]">
                    <div id="slider-container" class="flex w-max ml-[50%] relative">
                        <img id="service-slider-1" class="bg-cover object-cover object-left"
                            src="{{ asset('images/Group-1000001780.jpg') }}">

                        <img class="absolute left-[45px] top-[42px]" src="{{ asset('/images/Line-1.svg') }}" />

                        <x-services.text-slider left="left-[55px]" top="top-[42px]">
                            <p class="text-b2 font-black">4 MM USD</p>
                            <p>Private financing</p>
                            <p>for services startup in</p>
                            <p>Latin America</p>
                        </x-services.text-slider>

                        <img class="absolute left-[110px] top-[164px] h-[151px] w-auto" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[120px]" top="top-[164px]">
                            <p class="text-b2 font-black">30 MM USD</p>
                            <p>Mezzanine financing</p>
                            <p>for Argentine Services</p>
                            <p>Company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[375px] top-[19px] h-[67px] w-auto rotate-90" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[385px]" top="top-[36px]">
                            <p class="text-b2 font-black">41.5 MM USD</p>
                            <p>Associated with public listing</p>
                            <p>on TSX.V for Latin American</p>
                            <p>Services Co.</p>
                        </x-services.text-slider>

                        <img class="absolute left-[375px] top-[19px] h-[67px] w-auto rotate-90" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[385px]" top="top-[36px]">
                            <p class="text-b2 font-black">41.5 MM USD</p>
                            <p>Associated with public listing</p>
                            <p>on TSX.V for Latin American</p>
                            <p>Services Co.</p>
                        </x-services.text-slider>

                        <img class="absolute left-[553px] top-[152px] h-[151px] w-auto" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[563px]" top="top-[152px]">
                            <p class="text-b2 font-black">15 MM USD</p>
                            <p>Convertible debentures</p>
                            <p>for TSX.V Latin American</p>
                            <p>Service Co.</p>
                        </x-services.text-slider>

                        <img class="absolute left-[830px] top-[40px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[840px]" top="top-[40px]">
                            <p class="text-b2 font-black">30 MM USD</p>
                            <p>Mezzanine financing</p>
                            <p>for Argentine Services</p>
                            <p>Company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[962px] top-[152px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[972px]" top="top-[152px]">
                            <p class="text-b2 font-black">20 MM CDN</p>
                            <p>Follow-on equity financing </p>
                            <p>for TSX.V Latin American </p>
                            <p>Services Co.</p>
                        </x-services.text-slider>

                        <img class="absolute left-[1226px] top-[40px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[1236px]" top="top-[40px]">
                            <p class="text-b2 font-black">8 MM USD</p>
                            <p>Private financing </p>
                            <p>for Canadian junior</p>
                            <p>E&P company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[1352px] top-[149px] h-[118px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[1362px]" top="top-[149px]">
                            <p class="text-b2 font-black">31.5 MM USD</p>
                            <p>Senior Debt facility </p>
                            <p>for Latin American </p>
                            <p>Services company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[375px] top-[19px] h-[67px] w-auto rotate-90" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[385px]" top="top-[36px]">
                            <p class="text-b2 font-black">41.5 MM USD</p>
                            <p>Associated with public listing</p>
                            <p>on TSX.V for Latin American</p>
                            <p>Services Co.</p>
                        </x-services.text-slider>

                        <img class="absolute left-[1548px] top-[36px] h-[244px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[1558px]" top="top-[36px]">
                            <p class="text-b2 font-black">110 MM USD</p>
                            <p>Debt financing for an E&P </p>
                            <p>company in Thailand & Vietnam</p>
                        </x-services.text-slider>

                        <img class="absolute left-[1673px] top-[158px] h-[118px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[1683px]" top="top-[158px]">
                            <p class="text-b2 font-black">76.8 MM USD</p>
                            <p>Farmout of 50% of near </p>
                            <p>shore block for E&P </p>
                            <p>company in SE Asia</p>
                        </x-services.text-slider>

                        <img class="absolute left-[1922px] top-[36px] h-[244px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[1932px]" top="top-[36px]">
                            <p class="text-b2 font-black">240 MM USD</p>
                            <p>Acquisition of 4 service </p>
                            <p>companies in Colombia</p>
                        </x-services.text-slider>

                        <img class="absolute left-[2254px] top-[67px] h-[265px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[2264px]" top="top-[67px]">
                            <p class="text-b2 font-black">2 MM CDN</p>
                            <p>Seed funding for a </p>
                            <p>Peruvian E&P company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[2358px] top-[177px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[2368px]" top="top-[177px]">
                            <p class="text-b2 font-black">3 MM CDN</p>
                            <p>Funding associated </p>
                            <p>for a LatAm technology </p>
                            <p>incubator</p>
                        </x-services.text-slider>

                        <img class="absolute left-[2599px] top-[50px] h-[265px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[2609px]" top="top-[50px]">
                            <p class="text-b2 font-black">3 MM CDN</p>
                            <p>Seed funding </p>
                            <p>for a Peruvian </p>
                            <p>Water Company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[2751px] top-[165px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[2761px]" top="top-[165px]">
                            <p class="text-b2 font-black">15 MM USD</p>
                            <p>Purchase of two </p>
                            <p>development blocks </p>
                            <p>in Argentina</p>
                        </x-services.text-slider>

                        <img class="absolute left-[2974px] top-[50px] h-[265px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[2984px]" top="top-[50px]">
                            <p class="text-b2 font-black">2 MM USD</p>
                            <p>Seed funding of a Peruvian </p>
                            <p>gold mining company</p>
                        </x-services.text-slider>

                        <img class="absolute left-[3084px] top-[163px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[3094px]" top="top-[163px]">
                            <p class="text-b2 font-black">35 MM USD</p>
                            <p>Mezzanine financing </p>
                            <p>for accommodation barge </p>
                            <p>in Nigeria</p>
                        </x-services.text-slider>

                        <img class="absolute left-[3342px] top-[77px] h-[236px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[3352px]" top="top-[77px]">
                            <p class="text-b2 font-black">700 MM USD</p>
                            <p>Project finance </p>
                            <p>first FLNG barge </p>
                            <p>for Latin America</p>
                        </x-services.text-slider>

                        <img class="absolute left-[3492px] top-[192px] h-[118px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[3502px]" top="top-[192px]">
                            <p class="text-b2 font-black">65 MM USD</p>
                            <p>Long term contract financing </p>
                            <p>for accommodation barge </p>
                        </x-services.text-slider>

                        <img class="absolute left-[3920px] top-[78px] h-[225px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[3930px]" top="top-[78px]">
                            <p class="text-b2 font-black">800 MM USD</p>
                            <p>of production semi submersible </p>
                            <p>for Brazil </p>
                        </x-services.text-slider>

                        <img class="absolute left-[4224px] top-[118px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[4234px]" top="top-[118px]">
                            <p class="text-b2 font-black">250 MM USD</p>
                            <p>Project finance for gas </p>
                            <p>to power FSRU in Brazil</p>
                        </x-services.text-slider>

                        <img class="absolute left-[4493px] top-[95px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[4503px]" top="top-[95px]">
                            <p class="text-b2 font-black">1700 MM USD</p>
                            <p>Project finance </p>
                            <p>for FPSO for Petrobras </p>
                        </x-services.text-slider>

                        <img class="absolute left-[4760px] top-[76px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[4770px]" top="top-[76px]">
                            <p class="text-b2 font-black">22 MM USD</p>
                            <p>Capital raise for a geothermal </p>
                            <p>lithium project in Argentina </p>
                        </x-services.text-slider>

                        <img class="absolute left-[5072px] top-[78px] h-[151px]" src="{{ asset('/images/Line-1.svg') }}" />
                        <x-services.text-slider left="left-[5082px]" top="top-[78px]">
                            <p class="text-b2 font-black">261 MM USD</p>
                            <p>Sale of 51% stake  </p>
                            <p>in a Mexican E&P Company</p>
                        </x-services.text-slider>
                    </div>
                </div>
            </div>
        </x-ui.section>

        {{-- Sección 3 --}}
        <x-ui.section height="h-full" bg-img="bg-[url('/public/images/papel_web_1440x900-2.jpg')]">
            <div
                class="grid md:grid-cols-2 xs:grid-cols-1 md:mx-[50px] md:gap-x-20 xs:gap-y-[80px] mb-[45px]">
                <div class="flex flex-col md:items-center md:justify-center xs:gap-[54px]">
                    <x-services.card title="{{ __('services.section3.card1.title') }}">
                        <img src="{{ asset('/images/group-9.svg') }}" />

                        <div class="text-b3 text-black font-medium xs:text-center md:text-left leading-5">
                            <p class="xs:hidden md:block">{!! html_entity_decode(__('services.section3.card1.subtitle.desktop')) !!}</p>
                            <p class="xs:block md:hidden">{!! html_entity_decode(__('services.section3.card1.subtitle.mobile')) !!}</p>
                        </div>
                    </x-services.card>

                    <x-services.card title="{{ __('services.section3.card2.title') }}">
                        <img src="{{ asset('/images/group-1.svg') }}" />
                        <div class="text-b3 text-black font-medium xs:text-center md:text-left leading-5">
                            <p class="xs:hidden md:block">{!! html_entity_decode(__('services.section3.card2.subtitle.desktop')) !!}</p>
                            <p class="xs:block md:hidden">{!! html_entity_decode(__('services.section3.card2.subtitle.mobile')) !!}</p>
                        </div>
                    </x-services.card>

                    <x-services.card title="{{ __('services.section3.card3.title') }}">
                        <img src="{{ asset('/images/group-3.svg') }}" />

                        <div class="text-b3 text-black font-medium xs:text-center md:text-left leading-5">
                            <p class="xs:hidden md:block">{!! html_entity_decode(__('services.section3.card3.subtitle.desktop')) !!}</p>
                            <p class="xs:block md:hidden">{!! html_entity_decode(__('services.section3.card3.subtitle.mobile')) !!}</p>
                        </div>
                    </x-services.card>
                </div>

                <div class="flex flex-col md:items-center md:justify-center xs:gap-[54px]">
                    <x-services.card title="{{ __('services.section3.card4.title') }}">
                        <img src="{{ asset('/images/group-0.svg') }}" />

                        <div class="text-b3 text-black font-medium xs:text-center md:text-left leading-5">
                            <p class="xs:hidden md:block">{!! html_entity_decode(__('services.section3.card4.subtitle.desktop')) !!}</p>
                            <p class="xs:block md:hidden">{!! html_entity_decode(__('services.section3.card4.subtitle.mobile')) !!}</p>
                        </div>
                    </x-services.card>

                    <x-services.card title="{{ __('services.section3.card5.title') }}">
                        <img src="{{ asset('/images/group-2.svg') }}" />

                        <div class="text-b3 text-black font-medium xs:text-center md:text-left leading-5">
                            <p class="xs:hidden md:block">{!! html_entity_decode(__('services.section3.card5.subtitle.desktop')) !!}</p>
                            <p class="xs:block md:hidden">{!! html_entity_decode(__('services.section3.card5.subtitle.mobile')) !!}</p>
                        </div>
                    </x-services.card>

                    <x-services.card title="{{ __('services.section3.card6.title') }}">
                        <img src="{{ asset('/images/group-4.svg') }}" />

                        <div class="text-b3 text-black font-medium xs:text-center md:text-left leading-5">
                            <p class="xs:hidden md:block">{!! html_entity_decode(__('services.section3.card6.subtitle.desktop')) !!}</p>
                            <p class="xs:block md:hidden">{!! html_entity_decode(__('services.section3.card6.subtitle.mobile')) !!}</p>
                        </div>
                    </x-services.card>
                </div>
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>
