const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'docs/js')
   .sass('resources/sass/app.scss', 'docs/css')
   .setPublicPath('public');
