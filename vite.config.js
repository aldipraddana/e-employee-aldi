import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/css/plugin/dataTables.min.css',
                'resources/css/plugin/daterangepicker.css',
                'resources/css/plugin/select2.min.css',
                'resources/js/plugin/jquery-3.7.1.min.js',
                'resources/js/plugin/dataTables.min.js',
                'resources/js/plugin/moment.min.js',
                'resources/js/plugin/daterangepicker.min.js',
                'resources/js/plugin/select2.min.js',
                'resources/js/app.js',
                'resources/js/monitoring.js',
                'resources/js/input.js'
            ],
            refresh: true,
        }),
    ],
});
