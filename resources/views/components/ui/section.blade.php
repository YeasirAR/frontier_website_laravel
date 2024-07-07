<section class="{{ $height ?? 'min-h-screen' }} bg-no-repeat bg-cover {{ $bgPosition ?? 'bg-center' }} {{ $bgFixed ?? 'bg-fixed' }} {{ $bgImg }} p-[20px]">
    {{ $slot }}
</section>
