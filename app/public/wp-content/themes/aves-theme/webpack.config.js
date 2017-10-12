const webpack = require('webpack');
const path = require('path');

module.exports = {
    entry:  './assets/js/bundle.js',

    output: {
        path: path.join(__dirname, 'assets', 'dist'),
        filename: 'bundle.js'
    },

    module: {
        rules: [
            {
                test: /\.jsx?/i,
                loader: 'babel-loader',
                options: {
                    presets: ['es2015']
                }
            }
        ]
    },

    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ]
};
