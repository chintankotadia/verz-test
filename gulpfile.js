const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': './node_modules/jquery/',
    'bootstrap': './node_modules/bootstrap-sass/assets/'
}

elixir(mix => {
    mix.sass('app.scss').scripts([
        paths.jquery + "dist/jquery.js",
        paths.bootstrap + "javascripts/bootstrap.js",
        './resources/assets/js'
    ], 'public/js/app.js');
});
