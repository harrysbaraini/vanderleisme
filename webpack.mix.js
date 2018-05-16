const path = require('path');
const mix = require('laravel-mix');
const build = require('./tasks/build.js');
const tailwindcss = require('tailwindcss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss']),
    ],
    resolve: {
        alias: {
            "@source": path.resolve(__dirname, "source"),
            "@assets": path.resolve(__dirname, "_assets"),
            "@layouts": path.resolve(__dirname, "_layouts"),
        }
    }
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('tailwind.js')],
    })
    .version();
