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
mix.js([
    'resources/assets/bower/angular/angular.js',
    'resources/assets/bower/ngMask/dist/ngMask.js',
    //'resources/assets/bower/sweetalert2/dist/sweetalert2.all.js'
], 'public/js/vendor.js');
mix.sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass-admin/main.scss', 'public/css')
   .options({
        processCssUrls: false
   });
mix.js('resources/assets/js/angular-app/user/user.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/user/user.services.js', 'public/js')
   .js('resources/assets/js/angular-app/home/home.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/home/home.services.js', 'public/js')
   .js('resources/assets/js/angular-app/forgotPassword/forgotPassword.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/forgotPassword/forgotPassword.services.js', 'public/js')
   .js('resources/assets/js/angular-app/admin/admin.controllers.js', 'public/js')
   .js('resources/assets/js/angular-app/admin/admin.services.js', 'public/js').version();
mix.styles([
    'resources/assets/bower/sweetalert2/sweetalert2.css'
],'public/css/all.css').version();

mix.browserSync('makken_totaltech.test');
