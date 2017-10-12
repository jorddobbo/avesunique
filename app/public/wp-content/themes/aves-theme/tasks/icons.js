var easysvg = require('easy-svg');
var vfs = require('vinyl-fs');

module.exports = function (opts) {
    return vfs.src(opts.input)
        .pipe(easysvg.stream())
        .pipe(vfs.dest(opts.output));
};
