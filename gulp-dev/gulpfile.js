var themename = 'westpainting'; //name of the working theme folder

var gulp = require('gulp'),
  autoprefixer = require('autoprefixer'),
  browserSync = require('browser-sync').create(),
  jshint = require('gulp-jshint'),
  postcss = require('gulp-postcss'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename'),

  // variables for the working theme folder
  root = '../' + themename + '/',
  scss = root + 'sass/',
  js = root + 'js/',
  js_min = root + 'js/js-min';


// CSS via Sass and Autoprefixer
gulp.task('css', function() {
  return gulp.src(scss + '{style.scss,rtl.scss}')
  .pipe(sourcemaps.init())
  .pipe(sass({
      //outputStyle: 'compressed',
      outputStyle: 'compact',
      precision: 10
      // outputStyle: 'nested',
      // outputStyle: 'expanded',
      //indentType: 'tab',
      //indentWidth: '1'
  }).on('error', sass.logError))
  .pipe(postcss([
    autoprefixer('last 2 versions', '> 1%')
  ]))
  .pipe(sourcemaps.write(scss + 'maps'))
  .pipe(gulp.dest(root));
});

// JavaScript
gulp.task('javascript', function() {
  return gulp.src([js + '*.js'])
  .pipe(jshint())//checks the js files for errors and reports it
  .pipe(jshint.reporter('default'))
    .pipe(rename({suffix: '.min'}))//adds .min suffix
    .pipe(uglify())//minifies the file
  .pipe(gulp.dest(js_min));//saves it into the js-min folder
});


// Watch everything
gulp.task('watch', function() {
  browserSync.init({
    open: 'external',
    proxy: 'http://localhost/westpainting',
    port: 8080
  });
  gulp.watch([root + '**/*.css', root + '**/*.scss' ], ['css']);
  gulp.watch(js + '**/*.js', ['javascript']);
  gulp.watch(root + '**/*').on('change', browserSync.reload);
});


// Default task (runs at initiation: gulp --verbose)
gulp.task('default', ['watch']);
