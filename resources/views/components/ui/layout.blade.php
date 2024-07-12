<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <meta name="theme-color" content="#ffffff" id="theme-color-meta">
    <!-- iOS StatusBar -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" id="ios-status-bar">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head>

<body>
    <x-ui.header :dark="$dark" />

    {{-- Sidebar --}}
    <x-ui.menu :dark="$dark" />

    {{-- Icon bottom left fixed --}}
    <div class="fixed bottom-0 xs:hidden md:block">
        <img src="{{ asset('/images/clip-path-group.svg') }}">
    </div>

    <main class="h-max">
        {{ $slot }}
    </main>

    <x-ui.footer />

    <script>
        function updateThemeColor() {
            const metaThemeColor = document.querySelector('meta[name="theme-color"]');
            const iosStatusBar = document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]');
            
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                // User prefers dark mode
                metaThemeColor.setAttribute('content', '#000000'); // Set to dark color
                iosStatusBar.setAttribute('content', 'black-translucent');
            } else {
                // User prefers light mode
                metaThemeColor.setAttribute('content', '#ffffff'); // Set to light color
                iosStatusBar.setAttribute('content', 'default');
            }
        }

        // Initial call to set the theme color based on preference
        updateThemeColor();

        // Add a listener to update the theme color if the preference changes
        if (window.matchMedia) {
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateThemeColor);
        }
    </script>
</body>

</html>
