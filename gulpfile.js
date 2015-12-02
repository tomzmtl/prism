(function() {

    'use strict';

    var gulp   = require('gulp'),
        sass   = require('gulp-sass'),
        uglify = require('gulp-uglify'),
        concat = require('gulp-concat'),
        autoprefixer = require('gulp-autoprefixer'),

        assets = 'resources/assets';

    var path =
    {
        scss : assets + '/scss/',
        js   : assets + '/js/'
    };

    var options =
    {
        autoprefixer :
        {
            browsers: ['last 2 versions'],
            cascade: false
        }
    };


    gulp.task( 'scss', function()
    {
        gulp.src( path.scss+'styles.scss' )
            .pipe( sass().on('error', sass.logError) )
            .pipe(autoprefixer(options.autoprefixer))
            .pipe(gulp.dest('public/css'));
    });

    gulp.task( 'js', function()
    {
        gulp.src([ path.js+'lib/*.js', path.js+'modules/*.js', path.js+'scripts.js' ])
            .pipe(concat('scripts.js'))
            //.pipe(uglify())
            .pipe(gulp.dest('public/js'));

    });

    gulp.task( 'watch', function()
    {
        gulp.watch( path.scss+'**/*.scss', ['scss'] );
        gulp.watch( path.js+'**/*.js',     ['js']   );

    });

    // The default task (called when you run `gulp` from cli)
    gulp.task('default', ['scss','js']);

}())
