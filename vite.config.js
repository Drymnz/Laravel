import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/profile_picture.jpg',
                'resources/css/animetion_bord.css'
            ],
            refresh: true,
        }),
    ],
});
