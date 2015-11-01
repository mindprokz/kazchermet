'use strict'

var gulp = require('gulp'),
	minifyCss = require('gulp-minify-css'),
	autoprefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	livereload = require('gulp-livereload'),
	rename = require('gulp-rename');

// task for change html
gulp.task('html',function(){
	gulp.src('index.html');
});

// task for css
gulp.task('sass', function () {
	gulp.src('sass/*.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer('last 10 version'))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('sass/'));
});

// task for JS 
gulp.task('js', function() {
  	gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('js/script/'));
});

// taks for watch change files
gulp.task('watch', function(){
	gulp.watch('sass/*.sass', ['sass']);
	gulp.watch('index.html', ['html']);
	gulp.watch('js/*.js', ['js']);
});

// default task
gulp.task('default', ['html','sass','js','watch']);