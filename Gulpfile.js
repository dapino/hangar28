'use strict'

let gulp = require('gulp'),
    pug = require('gulp-pug2'),
    babel = require('gulp-babel'),
    htmlmin = require('gulp-htmlmin'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify'),
    livereload = require('gulp-livereload'),
    plumberErrorHandler = { errorHandler: notify.onError({
        title: 'Error',
        message: '<%= error.message %>'
    })};

gulp.task('assets', () => {
   return gulp.src('src/assets/*.*')
      .pipe(gulp.dest('./public/assets'));
})

gulp.task('views', () => {
  return gulp.src('./src/views/*.pug')
    .pipe(pug())
    .pipe(plumber(plumberErrorHandler))
    .pipe(htmlmin({collapseWhitespace: false}))
    .pipe(gulp.dest('./public'))
    .pipe(livereload());
});



gulp.task('styles', () => {
   return gulp.src('./src/css/*.{scss, css}')
      .pipe(plumber(plumberErrorHandler))
      .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
       .pipe(concat('main.css'))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('./public'))
      .pipe(livereload());
});


gulp.task('scripts', () => {
   return gulp.src('./src/js/*.js')
      .pipe(sourcemaps.init())
      .pipe(plumber(plumberErrorHandler))
        .pipe(babel({presets: ['es2015']}))
      .pipe(uglify())
      .pipe(concat('main.js'))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('./public'))
      .pipe(livereload());
});

gulp.task('watch', function() {
   livereload.listen();
   gulp.watch('./src/views/*.pug', ['views']);
   gulp.watch('./src/css/*.scss', ['styles']);
   gulp.watch('./src/js/*.js', ['scripts']);
});

gulp.task('wp', function() {
    return gulp.src('./public/**/*.*')
    .pipe(gulp.dest('./HANGAR_WP_THEME'));
 });

gulp.task('default', [ 'assets', 'views', 'styles', 'scripts','watch']);
