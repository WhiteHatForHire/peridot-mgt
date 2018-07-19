'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('sass', function () {
  return gulp.src('./dev/sass/b4st.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./theme/css/'));
});
 
gulp.task('watch', function () {
  gulp.watch('./dev/sass/**/*.scss', ['sass']);
});