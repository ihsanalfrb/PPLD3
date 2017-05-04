var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');
var uglify = require('gulp-uglify');
var del = require('del');
var image = require('gulp-image');

gulp.task('compile-sass', function(){
	return gulp.src('./resources/assets/sass/app.scss')
		.pipe(sass({ outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(concatCss('app.min.css'))
		.pipe(gulp.dest('./public/css'));
});

gulp.task('concat-js', function(){
	return gulp.src([
		'./resources/assets/js/lib/**/*.js',
		'./resources/assets/js/modules/**/*.js',
		'./resources/assets/js/app.js'
	])
	.pipe(uglify())
	.pipe(concat('app.min.js'))
	.pipe(gulp.dest('./public/js/'));
});

gulp.task('watch-sass', function(){
	gulp.watch(['./resources/assets/sass/**/*.{sass,scss}'],['compile-sass']);
});

gulp.task('watch-concat-js', function(){
	gulp.watch('./resources/assets/js/**/*.js',['concat-js']);
});

gulp.task('optimize-images', function(){
	return gulp.src('./resources/assets/images/*')
		// .pipe(image({
	 //      pngquant: true,
	 //      optipng: false,
	 //      zopflipng: true,
	 //      jpegRecompress: false,
	 //      jpegoptim: true,
	 //      mozjpeg: true,
	 //      gifsicle: true,
	 //      svgo: true,
	 //      concurrent: 10
	 //    }))
		.pipe(gulp.dest('./public/images/'));
});

gulp.task('default', ['optimize-images','compile-sass','concat-js','watch-sass','watch-concat-js']);