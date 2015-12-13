var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss').styles('welcome.css')
      .copy('resources/assets/fonts/KiplingRegular.otf', 'public/css/KiplingRegular.otf')
      .copy('vendor/almasaeed2010/adminlte', 'public/vendor/adminlte');
});
