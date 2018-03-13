let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js/app.js')
   .js('resources/assets/js/pages.js', 'public/js/pages.js')
    .extract(['lodash', 'jquery', 'axios', 'alertifyjs', 'popper.js', 'jquery.scrollbar', 'modernizr'], 'public/js/vendor.js')
    .autoload({
        jquery: ['$', 'jQuery', 'window.jQuery']
    });

mix.sass('resources/assets/sass/app.scss', 'public/css/app.css')
   .sass('resources/assets/sass/vendor.scss', 'public/css/vendor.css');
mix.sass('resources/assets/sass/pages/pages.scss', 'public/css')
   .options({
        processCssUrls: false
   });

const path = require('path');

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.modernizrrc.js$/,
                use: [ 'modernizr-loader' ]
            },
            {
                test: /\.modernizrrc(\.json)?$/,
                use: [ 'modernizr-loader', 'json-loader' ]
            }
        ]
    },
    resolve: {
        alias: {
            modernizr$: path.resolve(__dirname, "path/to/.modernizrrc")
        }
    }
});
