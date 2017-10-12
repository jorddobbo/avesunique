var browserSync;

function bs(opts, ctx, done) {
    if (browserSync && opts.method === 'reload') {
        browserSync[opts.method].apply(browserSync, opts.args);
        done();
    } else if (opts.method === 'init') {
        bsInit(opts, ctx, done);
    }
}

function bsInit(opts, ctx, done) {
    browserSync = require(opts.module || 'browser-sync').create();
    browserSync.init({
        proxy: opts.proxy,
        open: false,
        logFileChanges: false,
        plugins: ['bs-fullscreen-message']
    }, function (err) {
        if (err) {
            return done(err);
        }
        done();
    });
}

module.exports = bs;
