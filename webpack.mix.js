let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css') // Si usas Sass
   .styles(['public/css/app.css'], 'public/css/app.css') // Para CSS puro
   .purgeCss({
       enabled: mix.inProduction(),
       content: [
           './resources/views/**/*.blade.php',
           './resources/views/*.blade.php',
           './resources/views/**/*.php', // Si tienes vistas PHP personalizadas
           './public/js/**/*.js', // Si tienes scripts JS en el público
       ],
       defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
   });
