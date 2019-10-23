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

// mix.js('resources/js/app.js', 'public/js')

mix.scripts(
    [
        "resources/js/ancre.js",
        "node_modules/jquery/dist/jquery.js",
        // "resources/js/bootstrap.js",
        "node_modules/bootstrap/dist/js/bootstrap.js",
        "node_modules/magnific-popup/dist/jquery.magnific-popup.js",
        "resources/js/owl.carousel.min.js",
        "resources/js/circle-progress.min.js",
        "resources/js/main.js",
        "resources/js/map.js",
    ],
    "public/js/app.js"
    );
    
mix.sass('resources/sass/app.scss', 'public/css');
mix.styles(
    [
    "resources/css/bootstrap.min.css",
    "resources/css/flaticon.css",
    "resources/css/font-awesome.min.css",
    "resources/css/magnific-popup.css",
    "resources/css/owl.carousel.css",
    "resources/css/style.css"
    ],
    "public/css/app.css"
);
