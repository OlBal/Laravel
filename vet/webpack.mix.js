const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
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

mix.sass(
    "resources/themes/brand-a/sass/styles.scss",
    "public/assets/themes/brand-a/css/styles.css",
    {},
    [tailwindcss("./resources/themes/brand-a/tailwind.js")]
)
    .sass(
        "resources/themes/brand-b/sass/styles.scss",
        "public/assets/themes/brand-b/css/styles.css",
        {},
        [tailwindcss("./resources/themes/brand-b/tailwind.js")]
    )
    .options({
        processCssUrls: false
    });
