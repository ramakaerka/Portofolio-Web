import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/coba.css',
                'resources/css/bingkai.css',
                'resources/css/detail_portofolio.css',
                'resources/js/app.js',
                'resources/js/script.js',
            ],
            refresh: true,
        }),
    ],
});
