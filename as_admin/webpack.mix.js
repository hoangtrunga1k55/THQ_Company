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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

/*
 |--------------------------------------------------------------------------
 | Vendor resources
 |--------------------------------------------------------------------------
 */
mix.styles([
    'node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/admin-lte/bower_components/font-awesome/css/font-awesome.min.css',
    'node_modules/admin-lte/bower_components/Ionicons/css/ionicons.min.css',
    'node_modules/admin-lte/dist/css/AdminLTE.css',
    'node_modules/admin-lte/dist/css/skins/skin-black-light.min.css',
    'node_modules/admin-lte/bower_components/select2/dist/css/select2.min.css',
    'node_modules/admin-lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
], 'public/css/vendor.css')
