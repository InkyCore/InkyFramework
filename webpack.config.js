const path = require('path');

const SRC_DIR = path.resolve(__dirname, 'resource');
const PUB_DIR = path.resolve(__dirname, 'public');

module.exports = {
    entry: SRC_DIR + '/js/site/start.jsx',
    output: {
        path: PUB_DIR + '/js/site',
        filename: 'start.js',
        publicPath: "/js/site/"
    },
    module: {
        rules: [{
            test: /\.(js|jsx)$/,
            exclude: /node_modules/,
            use: {
                loader: "babel-loader",
                query: {
                    presets: ["react"]
                }
            }
        }]
    }
};