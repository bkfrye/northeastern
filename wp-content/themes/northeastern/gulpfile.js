var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    runSequence = require('run-sequence'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify'),
    bourbon = require("node-bourbon").includePaths,
    neat = require("node-neat").includePaths;

//Paths
var paths = {
    templates: '**/*.php',
    scss: 'assets/sass/**/*.scss',
    js: 'assets/js/*.js'
};


//dev tasks---------------------------------

// Start browserSync server
gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "http://northeastern.dev"
    });
});


// Run SCSS tasks
gulp.task('styles', function() {
    var onError = function(err) {
        notify.onError({
                    title:    "Gulp Error",
                    message:  "Error: <%= error.message %>",
                    sound:    "Beep"
                })(err);

        this.emit('end');
    };

    return gulp.src(paths.scss)
        .pipe(plumber({errorHandler: onError}))
        .pipe(sass({
          'sourcemap=none': true,
          includePaths: bourbon,
          includePaths: neat
        }))
        .pipe(autoprefixer('last 2 versions', 'ie 10'))
        .pipe(gulp.dest('assets/css/'))
        .pipe(browserSync.reload({
            stream: true
        }));
});


//Run Template tasks
gulp.task('templates', function() {
    return gulp.src(paths.templates)
    .pipe(browserSync.reload({
        stream:true
    }));
});


//Run js tasks
gulp.task('js', function() {
    return gulp.src(paths.js)
    .pipe(browserSync.reload({
        stream:true
    }));
});


//Watch files in /dev
gulp.task('watch', ['browserSync'], function() {
    gulp.watch(paths.scss, ['styles']);
    gulp.watch(paths.templates, ['templates']);
    gulp.watch(paths.js, ['js']);
});


gulp.task('default', function (callback) {
    runSequence(['templates', 'styles', 'js', 'browserSync', 'watch'], callback);
});
