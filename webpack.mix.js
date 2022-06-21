//const mix = require('laravel-mix');

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

require('dotenv').config();
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

if (!mix.inProduction()) {
    // development settings:
    //     add source maps
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps()
}

mix
    // don't rewrite URLs in CSS files
    .options({
        processCssUrls: false
    })

    // open and serve with browsersync
    .browserSync({
        host: 'localhost',
        port: 3000,
        proxy: {
            target: process.env.APP_URL // don't forget to set APP_URL in .env
        }
    })

    // add versioning
    .version();

// ADD ASSETS TO COMPILE HERE:

// Examples:
mix.sass('resources/css/app.scss', 'public/css');
mix.js('resources/js/latest-books.js', 'public/js');
// mix.js('resources/js/app.js', 'public/js').react();
