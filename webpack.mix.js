const mix = require('laravel-mix');

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

mix.js('resources/global/js/app.js', 'public/js')
    .sass('resources/global/sass/app.scss', 'public/css')
    .browserSync({
        proxy: '127.0.0.1:8000/',
        notify: false
    })
    .copyDirectory('resources/img', 'public/img')
    .copyDirectory('resources/global/img', 'public/global/img')
    .version();
