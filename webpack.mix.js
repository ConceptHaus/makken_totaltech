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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });
mix.browserSync('192.168.33.10');
mix.js('resources/assets/js/angular-app/app.js','public/js')
   .js('resources/assets/js/angular-app/home/home.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/home/home.services.js', 'public/js')
   .js('resources/assets/js/angular-app/user/user.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/user/user.services.js', 'public/js')
   .js('resources/assets/js/angular-app/admin/admin.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/admin/admin.services.js', 'public/js').version();
