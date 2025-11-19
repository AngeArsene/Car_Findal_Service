import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                favicon: 'resources/img/favicon/favicon.ico',
                manifest: 'resources/img/favicon/site.webmanifest',
                favicon32: 'resources/img/favicon/favicon-32x32.png',
                favicon16: 'resources/img/favicon/favicon-16x16.png',
                appleTouch: 'resources/img/favicon/apple-touch-icon.png',
            }
        }
    }
});
