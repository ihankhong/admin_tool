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
mix.webpackConfig({
    module: {
        rules: [
            {
                test: require.resolve("./resources/assets/js/plugins/modernizr.custom.js"),
                use: "imports-loader?this=>window"
            }
        ]
    }
});

mix.js('resources/assets/js/app.js', 'public/js/app.js')
   .js('resources/assets/js/pages.js', 'public/js/pages.js')
   .extract(['lodash', 'jquery', 'axios', 'alertifyjs', 'popper.js', 'jquery.scrollbar', 'jquery-ui'], 'public/js/vendor.js')
   .autoload({
    jquery: ['$', 'jQuery', 'window.jQuery']
  });

// plugins
mix.js('resources/assets/js/plugins/modernizr.custom.js', 'public/js');

mix.sass('resources/assets/sass/app.scss', 'public/css/app.css')
   .sass('resources/assets/sass/vendor.scss', 'public/css/vendor.css')
   .sass('resources/assets/sass/jquery-ui.scss', 'public/css');
mix.sass('resources/assets/sass/pages/pages.scss', 'public/css')
   .options({
        processCssUrls: false
   });

if (mix.inProduction()) {
    mix.version();
}