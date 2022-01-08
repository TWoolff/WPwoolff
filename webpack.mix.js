// webpack.mix.js

let mix = require('laravel-mix');
const { assertSupportedNodeVersion } = require('laravel-mix/src/Engine');

mix.options({processCssUrls: false})
   .js('src/scripts.js', 'js')
   .sass('src/scss/styles.scss', 'css')
   .setPublicPath('assets')
   .browserSync('http://localhost:8000');