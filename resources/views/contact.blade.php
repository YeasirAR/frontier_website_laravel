<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/news.js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Contact</title>
</head>

<body>
    <x-ui.layout :dark="false">
        {{-- Sección 1 --}}
        <x-ui.section height="xs:h-full md:h-screen" bg-img="bg-[url('/public/images/CONTACT_FRONTIER1.jpg')]">
            <div class="flex flex-col h-full text-center items-center gap-3">
                <div class="max-w-[900px]">
                    <h1 class="md:text-h1 xs:text-s3 font-black text-white uppercase xs:mt-[151px] md:mt-[101px] md:leading-[98px] xs:leading-[44px]">
                        {{ __('contact.section1.title') }}
                    </h1>
                </div>

                <form class="flex flex-col justify-center items-center" method="POST" action="/contact">
                    @csrf

                    <div class="grid md:grid-cols-2 xs:grid-cols-1 gap-x-5 gap-y-3">
                        <x-ui.input name="name" type="text" value="{{ old('name') }}"
                            placeholder="{{ __('contact.input.name') }}"
                            error="@error('name') {{ $message ?? '' }} @enderror"
                            class="md:w-[440px] h-[48px] xs:w-[350px]" />

                        <x-ui.input name="email" type="email" value="{{ old('email') }}"
                            placeholder="{{ __('contact.input.email') }}"
                            error="@error('email') {{ $message ?? '' }} @enderror"
                            class="md:w-[440px] h-[48px] xs:w-[350px]" />

                        <x-ui.input name="subject" type="text" value="{{ old('subject') }}"
                            placeholder="{{ __('contact.input.subject') }}"
                            error="@error('subject') {{ $message ?? '' }} @enderror"
                            class="md:w-[440px] h-[48px] xs:w-[350px]" />

                        <x-ui.input name="phone" type="tel" value="{{ old('phone') }}"
                            placeholder="{{ __('contact.input.phone') }}"
                            error="@error('phone') {{ $message ?? '' }} @enderror"
                            class="md:w-[440px] h-[48px] xs:w-[350px]" />

                        <x-ui.textarea name="message" value="{{ old('phone') }}"
                            placeholder="{{ __('contact.input.message') }}"
                            error="@error('message') {{ $message ?? '' }} @enderror"
                            class="md:w-[900px] md:h-[202px] xs:w-[350px] xs:h-[212px] md:col-span-2 xs:col-span-1" />
                    </div>

                    <x-ui.button :disabled="false" bg-color="bg-dark-blue-900" text-color="text-white" type="submit"
                        class="md:mt-[40px] xs:mt-[23px] md:w-[440px] h-[50px] xs:w-[350px]">
                        {{ __('contact.button.send') }}
                    </x-ui.button>

                    <div class="g-recaptcha md:mt-[59px] xs:mt-[21px]" data-sitekey="{{ $recaptcha_client }}"></div>
                </form>
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>
