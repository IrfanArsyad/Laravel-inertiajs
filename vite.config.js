import { fileURLToPath, URL } from 'url'
import {defineConfig} from 'vite';
import vue from '@vitejs/plugin-vue'
import viteHttps from 'vite-plugin-mkcert'
import laravel from 'laravel-vite-plugin'
import viteCompression from 'vite-plugin-compression'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/assets/css/app.scss', 'resources/assets/js/app.js'],
            refresh: true,
        }),
        // viteHttps(),
        viteCompression(),
    ],
    resolve: {
        alias: {
            '@/module': fileURLToPath(new URL('./app/Modules/', import.meta.url)),
            '@/vue': fileURLToPath(new URL('./resources/vue', import.meta.url)),
            '@/assets': fileURLToPath(new URL('./resources/assets', import.meta.url)),
            'ziggy': fileURLToPath(new URL('./vendor/tightenco/ziggy/src/js/', import.meta.url)),
        },
    },
});
