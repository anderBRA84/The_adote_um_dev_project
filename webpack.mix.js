const mix = require("laravel-mix");

require("laravel-mix-tailwind");

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
mix.webpackConfig({ stats: { children: true, }, });
mix.js(["resources/js/app.js",
        "resources/js/components/chat-list.js",
       "resources/js/components/chat.js",
       "resources/js/components/index.js",
       "resources/js/components/preference-form.js",
       "resources/js/components/start-form.js",
       "resources/js/components/swipe-card.js"
       ],
       "public/js/app.js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .styles(['resources/css/app.css',
             'resources/css/style.css'],
             'public/css/style.css')
    .tailwind("./tailwind.config.js")
    .sourceMaps();


if (mix.inProduction()) {
    mix.version();
}
