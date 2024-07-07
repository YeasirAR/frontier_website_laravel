<x-ui.header :dark="$dark" />

{{-- Sidebar --}}
<x-ui.menu :dark="$dark" />

{{-- Icon bottom left fixed --}}
<div class="fixed bottom-0">
    <img src="{{ asset('/images/clip-path-group.svg') }}">
</div>

<main class="h-max">
    {{ $slot }}
</main>

<x-ui.footer />
