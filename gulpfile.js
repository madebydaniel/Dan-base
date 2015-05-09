var gulp = require('gulp'),
    uglify = require('gulp-uglify');
    browserSync = require('browser-sync'),
    reload = browserSync.reload;
    sass = require('gulp-ruby-sass'),
    prefix = require('gulp-autoprefixer');


function errorLog(error) {
  console.error.bind(error);
  this.emit('end');
}

//uglify js
gulp.task('mainJs', function(){
  gulp.src('library/js/functions/scripts.js')
  .on('error', errorLog)
  .pipe(uglify())
  .pipe(gulp.dest('library/js/'))
});


//main stylesheet
gulp.task('mainStyles', function(){
  sass('library/scss/style.scss', {
    style: 'compressed',
    container: 'gulp-ruby-sass-main'
  })
  .on('error', errorLog)
  .pipe(prefix('last 2 versions'))
  .pipe(gulp.dest('library/css/'));
});

//login stylesheet
gulp.task('loginStyles', function(){
  sass('library/scss/wp-backend/login.scss', {
    style: 'compressed',
    container: 'gulp-ruby-sass-main'
  })
  .on('error', errorLog)
  .pipe(prefix('last 2 versions'))
  .pipe(gulp.dest('library/css/'));
});



//watch task
gulp.task('watch', function(){
  gulp.watch([
    'library/scss/style.scss',
    'library/scss/**/*.scss'
  ], ['mainStyles']);

  gulp.watch([
    'library/scss/login.scss'
  ], ['loginStyles']);

  gulp.watch([
    'library/js/functions/scripts.js'
  ], ['mainJs']);

  browserSync({
      proxy: "http://starter.dev"
  });

  gulp.watch('library/css/style.css').on('change', reload);

});


gulp.task('default', ['mainStyles', 'loginStyles', 'watch']);
