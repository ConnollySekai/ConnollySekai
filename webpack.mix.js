const mix = require('laravel-mix');

const purgeCss = require('@fullhuman/postcss-purgecss');

const postcssImport = require('postcss-import');

const postcssNested = require('postcss-nested');

const autoprefixer = require('autoprefixer');

const tailwindcss = require('tailwindcss');

let postCssPlugins = [
   postcssImport,
   tailwindcss,
   postcssNested,
   autoprefixer
];

if (mix.inProduction()) {
   
   postCssPlugins.push(purgeCss({
      content: [
         'resources/views/**/*.php',
         'resources/js/**/*.vue'
      ],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
   }));

   mix.version();
}

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

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css',postCssPlugins)
   .browserSync({
      proxy: 'http://127.0.0.1:8000'
});
