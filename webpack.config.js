var webpack = require('webpack');

module.exports = {
    devtool: 'source-map',
    entry: './src/js/script.js',
    output: {
        path: __dirname,
        filename: 'public/script.min.js'
    },
    module: {
        loaders: [{
            test: /.js$/,
            loader: 'babel-loader',
            query: {
                presets: ['es2015']
            }
        }]
    },
    plugins: [
      new webpack.optimize.UglifyJsPlugin({minimize: true})
    ]
};
