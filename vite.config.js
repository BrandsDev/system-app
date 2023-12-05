import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: [
                'resources/css/bootstrap.min.css',
                'resources/js/fontawesome-6.4.0.js',
                'resources/js/bootstrap.bundle.min.js',
            ],
        },
    build: {
        sourcemap: true, // Enable source map generation
        manifest: true,
        cssCodeSplit: true,
    },
});
