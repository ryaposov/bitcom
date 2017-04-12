'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sassGlob = require('gulp-sass-glob'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    concat = require('gulp-concat'),
    pump = require('pump'),
    browserSync = require('browser-sync').create();

var autoprefixerOptions = {
 		browsers: ['> 0%']
};

gulp.task('default', ['build', 'watch']);

gulp.task('build', ['sass', 'image', 'js']);

gulp.task('sass', function () {
	return gulp.src('assets/sass/*.scss')
  	.pipe(sassGlob())
  	.pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(cleanCSS({
      compatibility: '*',
      level: 2
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream({match: '**/*.css'}));
});

gulp.task('image', function () {
  return gulp.src('assets/images/**')
    .pipe(imagemin())
    .pipe(gulp.dest('images'));
});

gulp.task('js', function() {
	gulp.src(['assets/js/jquery.js', 'assets/js/common/*', 'assets/js/scripts.js',])
	.pipe(sourcemaps.init())
	.pipe(concat('all.js'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('js'))
	.pipe(browserSync.stream({match: '**/*.js'}))
});

gulp.task('watch', function(){
  browserSync.init({
    injectChanges: true,
    proxy: 'bitcom.loc:8888'
  });
  gulp.watch('assets/sass/**', ['sass']);
  gulp.watch('assets/js/**', ['js']);
  gulp.watch('assets/images/**', ['image']).on('change', browserSync.reload);
  //gulp.watch('../views/**').on('change', browserSync.reload);
});
