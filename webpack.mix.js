const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .styles([
        'resources/css/style.css',
        ],'public/css/style.css')

    .scripts([
        'resources/js/script.js'
        ],'public/js/script.js')

    .version()

    .js('resources/js/app.js', 'public/js')

    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction() && mix.inDevelopment()) {
    mix.version();
}
