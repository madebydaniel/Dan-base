var gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    csswring = require('csswring'),
    autoprefixer = require('autoprefixer'),
    lost = require('lost'),
    sass = require('gulp-sass'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    browserSync = require('browser-sync');


//JS
gulp.task('scripts', function() {
  return gulp.src('library/js/functions/*.js')
    .pipe(concat('scripts.js'))
    .pipe(rename({suffix: '.min'}))
    //.pipe(uglify())
    .pipe(gulp.dest('library/js/'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

//SCSS - POSTCSS - CSS
gulp.task('mainStyles', function(){
  var processors = [
        lost,
        csswring,
        autoprefixer({browsers:['last 2 versions']})
    ];

  return gulp.src('library/scss/style.scss')
    .pipe(sass())
    .pipe(postcss(processors))
    .pipe(plumber())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('library/css/'))
    .pipe(browserSync.reload({stream:true}))
    .pipe(notify({ message: 'Styles task complete' }));

});

//login stylesheet
gulp.task('loginStyles', function(){

  var processors = [
        lost,
        csswring,
        autoprefixer({browsers:['last 2 versions']})
    ];

  return gulp.src('library/scss/wp-backend/login.scss')
    .pipe(sass())
    .pipe(postcss(processors))
    .pipe(plumber())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('library/css/'))
    .pipe(browserSync.reload({stream:true}))
    .pipe(notify({ message: 'Styles task complete' }));
});



gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://frame.dev"
    });
});

//watch task
gulp.task('watch', function(){
  gulp.watch([
    'library/scss/style.scss',
    'library/scss/**/**/*.scss'
  ], ['mainStyles']);

  gulp.watch([
    'library/scss/login.scss'
  ], ['loginStyles']);

   gulp.watch([
    'library/js/functions/*.js'
  ], ['scripts']);


  browserSync({
      proxy: "http://frame.dev"
  });

  gulp.watch('library/css/style.min.css').on('change', browserSync.reload);

});


gulp.task('default', ['mainStyles', 'loginStyles', 'watch']);
