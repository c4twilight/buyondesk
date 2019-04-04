const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/custom_script.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/homepage.scss', 'public/css')
   .sass('resources/assets/sass/header.scss', 'public/css')
   .sass('resources/assets/sass/footer.scss', 'public/css')
   .sass('resources/assets/sass/sell.scss', 'public/css')
   .sass('resources/assets/sass/buy.scss', 'public/css')
   .sass('resources/assets/sass/unitBuy.scss', 'public/css')
   .sass('resources/assets/sass/about.scss', 'public/css');
