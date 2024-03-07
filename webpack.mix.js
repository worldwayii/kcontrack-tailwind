const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

const spritemap = new SVGSpritemapPlugin('resources/svg/heroicons/*.svg', {
    sprite: { prefix: false },
    output: {
        filename: '/svg/heroicons.svg',
        chunk: { name: 'heroicons-sprite', keep: true },
    }
});

mix.webpackConfig({
    plugins:[spritemap]
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]).version();


mix.copy('resources/svg/*.svg', 'public/svg/');
