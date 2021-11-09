const mix = require('laravel-mix');

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
const CompressionPlugin = require( "compression-webpack-plugin" );
const zlib              = require( "zlib" );

mix.js( 'resources/js/app.js', 'public/js' )
    .sass( 'resources/sass/app.scss', 'public/css' )
    .sourceMaps()
    .webpackConfig( {
        plugins: [
            new CompressionPlugin( {
                test: /\.(js|css|html|svg)$/,
                algorithm: "brotliCompress",
                minRatio: 0.8,
                compressionOptions: {
                    params: {
                        [ zlib.constants.BROTLI_PARAM_QUALITY ]: 11,
                    },
                },
                deleteOriginalAssets: false,
            } )
        ]
    } );
