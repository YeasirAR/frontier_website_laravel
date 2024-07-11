import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/services-animation.js',
                'resources/js/sectors-animation.js',
                'resources/js/experience-animation.js',
                'resources/js/news.js',
                'resources/js/button-scroll.js',
            ],
            refresh: true,
        }),
    ],
});
