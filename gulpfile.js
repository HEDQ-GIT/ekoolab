var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;

elixir(function (mix) {
    // all css from this less
    mix.less('app.less');
    mix.styles('app.css', 'public/css/app.min.css', 'public/css');

    mix.styles([
        //import css
        '../vendor/fontawesome/css/font-awesome.css',
        '../vendor/materialize/dist/css/materialize.min.css',
        '../vendor/animate.css/animate.min.css',

        //'public/css/xxx.css',
    ], 'public/css/vendor.min.css'); // all vendor css //{{ asset('/css/vendor.min.css') }}


    // all vendor js
    mix.scripts([
        '../vendor/jquery/dist/jquery.js',
        //'../vendor/bootstrap/dist/js/bootstrap.js',
        '../vendor/materialize/dist/js/materialize.js',
        '../vendor/vue/dist/vue.min.js',
        '../vendor/vue-validator/dist/vue-validator.js',
        '../vendor/typewriter/typewriter.js',
        '../vendor/wow/dist/wow.min.js',

        // '../vendor/angular/angular.js',
    ], 'public/js/vendor.min.js'); //{{ asset('/js/vendor.min.js') }}

    mix.scripts('app.js', 'public/js/app.min.js');
    mix.scripts('index.js', 'public/js/index.min.js');


    mix.version([
        "css/app.min.css", // app all css from app.less {{ elixir("css/app.min.css") }}
        "js/app.min.js", // app common js {{ elixir("js/app.min.js") }}
        "js/index.min.js", // {{ elixir("js/page.min.js") }}
    ]);
});
