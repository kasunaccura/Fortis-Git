var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');

// const sass = gulpSass(nodeSass);

gulp.task('browserSync', function () {
    browserSync.init({
        proxy: 'http://localhost/kasun'
    })
})

gulp.task('sass', function() {
   return gulp.src('sass/**/*.scss')
   .pipe(sourcemaps.init())
   .pipe(sass())
   .pipe(sourcemaps.write('.'))
   .pipe(gulp.dest('.'))
   .pipe(browserSync.reload({
       stream:true
   }))
})

// gulp.task('lint', function () {
//     return gulp.src('js/*.js')
//         .pipe(jshint())
//         .pipe(jshint.reporter('default'));
// });


gulp.task('watch', ['browserSync','sass'], function () {
    gulp.watch('sass/**/*.scss', ['sass']);
    gulp.watch('sass/**/*.scss', browserSync.reload);
})