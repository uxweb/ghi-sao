var gulp = require('gulp');
var gulp_stylus = require('gulp-stylus');
var nib = require('nib');

var stylus_file = 'app/assets/stylus/main.styl';

gulp.task('css', function() {
    gulp.src(stylus_file)
        .pipe(gulp_stylus())
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
    gulp.watch('app/assets/stylus/**/*.styl', ['css']);
});

gulp.task('default', ['watch']);