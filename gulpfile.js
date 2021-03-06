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
    mix.sass('app.sass', 'www/css/app.css');
    mix.sass('index.sass', 'www/css/index.css');
    mix.sass('blog-post.sass', 'www/css/blog-post.css');
    mix.sass('work.sass', 'www/css/work.css');
});
