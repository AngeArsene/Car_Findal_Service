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
            }
        }
    }
});
