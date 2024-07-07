<div class="flex w-full justify-center {{  $reverse ? "md:flex-row" : "md:flex-row-reverse" }} xs:flex-col-reverse xs:items-center md:items-start gap-5">
    <div class="flex flex-col w-full text-black {{  $reverse ? "md:text-right" : "md:text-left" }} xs:text-center md:gap-[10px] xs:gap-[14px]">
        <h6 class="text-s3 font-black leading-[44px]">{{ $name }}</h6>
        <span class="text-b1 font-bold leading-[24px]">{{ html_entity_decode($position) }}</span>

        <div class="text-b3 font-medium leading-5">
            <p class="xs:hidden md:block">{!! html_entity_decode(__($description->desktop)) !!}</p>
            <p class="md:hidden xs:block">{!! html_entity_decode(__($description->mobile)) !!}</p>
        </div>
    </div>
    <div class="flex w-full {{ $reverse ? 'md:justify-start' : 'md:justify-end' }} xs:justify-center">
        <img src="{{ asset($imgUrl) }}" />
    </div>
</div>
