let mix = require('laravel-mix');

require('laravel-mix-polyfill');

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

mix
    .scripts([
        'resources/libs/jquery/dist/jquery.min.js',
        'resources/libs/fancybox/dist/jquery.fancybox.min.js',
        'resources/libs/required_fields/jquery.maskedinput.min.js',
        'resources/libs/required_fields/required_fields.js',
    ], 'public/js/all.js')
    .js('resources/js/scripts.js', 'public/js')
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: false, // Используем настройки browserslist из package.json
        debug: true,
        corejs: '3.8',
    })
    .sass('resources/sass/main.sass', 'public/css')
    .options({
        postCss: [
            require('autoprefixer')({
                cascade: false, // Отключаем выравнивание вендорных префиксов
            }),
        ]
    })
    .browserSync('studiodance-site')
    .version();