import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/css/splide.min.css',
                'public/css/swiper.min.css', 
                'public/css/venobox.min.css',
                'public/css/rangeslider.css',
                'public/css/feather-icons.css',
                'public/common/css/tinymce.css',
                'public/css/nouislider.min.css',
                'public/common/css/croppie.css',
                'public/common/css/combotree.css',
                'public/common/js/select2.min.js',
                'public/css/swiper-bundle.min.css',
                'public/common/css/select2.min.css',
                'public/css/fontawesome/all.min.css',
                'public/admin/css/themify-icons.css',
                'public/js/vendor/nouislider.min.js',
                'public/common/css/bootstrap.min.css',
                'public/css/fontawesome/nunito-font.css',
                'public/common/js/jquery-confirm.min.js',
                'public/common/css/jquery-confirm.min.css',
                'public/css/fontawesome/font-awesome-six.css',
                'public/common/css/jquery.mCustomScrollbar.min.css',
            ],
            refresh: true,
        }),
    ],
});
