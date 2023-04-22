import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import sassGlobImports from 'vite-plugin-sass-glob-import';

export default defineConfig({
    server: {
        origin: process.env.APP_URL
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/guest.scss',
                'resources/js/app.js',
                'resources/js/guest.js',
                'resources/js/loconative.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
        sassGlobImports(),
    ],
    css: {
      preprocessorOptions: {
        scss: {
        },
        styl: {
        },
      },
    },
});
