import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/css/datatables.style.css',
                'resources/css/litepicker.css',
                'resources/css/styles.css',
                'resources/js/litepicker.js',
                'resources/js/delete-button.js',
                'resources/js/datatables/datatables-custom-regular.js',
                'resources/js/datatables/datatables-product-adons.js',
                'resources/js/datatables/datatables-simple-demo.js',
                'resources/js/button.deal.js'
            ],
            refresh: true,
        }),
    ],
});
