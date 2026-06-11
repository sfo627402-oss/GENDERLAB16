import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const appUrl = process.env.APP_URL?.replace(/\/$/, '');
const baseUrl = appUrl && !/^(https?:\/\/)?(localhost|127\.0\.0\.1)(:\d+)?$/i.test(appUrl)
    ? `${appUrl}/`
    : '/';

export default defineConfig({
    base: baseUrl,
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
