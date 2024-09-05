import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
>>>>>>> 95f23c6410822de96935fe2fddd9cd3957c76717
            refresh: true,
        }),
    ],
});
