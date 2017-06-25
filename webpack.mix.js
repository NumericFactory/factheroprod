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

//mix.js('resources/assets/js/app.js', 'public/js');
mix.js('resources/assets/js/jquery.min.js', 'public/js');
mix.js('resources/assets/js/jquery.ajaxchimp.min.js', 'public/js');
mix.js('resources/assets/js/lightslider.min.js', 'public/js');
mix.js('resources/assets/js/custom.js', 'public/js');


mix.copy('resources/assets/css/animate.css', 'resources/assets/sass/_animate.scss');
mix.copy('resources/assets/css/bootstrap-rtl.min.css', 'resources/assets/sass/_bootstraprtl.scss');
mix.copy('resources/assets/css/lightslider.min.css', 'resources/assets/sass/_lightslider.scss');
mix.copy('resources/assets/css/style.css', 'resources/assets/sass/_style.scss');

mix.styles([
    'resources/assets/css/blogstyle.css',
    'resources/assets/css/blogstyle1.css',
    'resources/assets/css/blogstyle2.css',
    'resources/assets/css/blogstyle3.css',
], 'public/css/blostyle.css');

mix.sass('resources/assets/sass/app.scss', 'public/css');
