var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    minifycss   = require('gulp-minify-css'),
    rename      = require('gulp-rename'),
    plumber     = require('gulp-plumber'),
    watch       = require('gulp-watch');

var config = {
  "style": {
    "src": "assets/scss/**/*.scss",
    "dist": "assets/css/"
  }
};

gulp.task('style', function () {
  gulp.src([config.style.src])
    .pipe(plumber())
    .pipe(sass())
    .pipe(gulp.dest(config.style.dist))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest(config.style.dist));
});

gulp.task('watch', function () {
  watch('assets/scss/**', function () {
      gulp.start(['style']);
  });
});
