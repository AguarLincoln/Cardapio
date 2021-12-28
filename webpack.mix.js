const mix = require('laravel-mix');

mix.css('resources/css/plugins/fontawesome-free/css/all.css', 'public/css/fontawesome.css');
mix.css('resources/css/plugins/icheck-bootstrap/icheck-bootstrap.css', 'public/css');
mix.css('resources/css/app.css', 'public/css');


mix.js([
    'resources/js/plugins/bootstrap/js/bootstrap.bundle.js',
    'resources/js/app.js'
], 'public/js/app.js');

if(mix.inProduction()){
    mix.version();
}
