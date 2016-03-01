var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('sass', function() {
	return gulp.src('sass/style.scss')
		.pipe(sass()) // Converts Sass to CSS with gulp-sass
		.pipe(cssnano({discardComments: {removeAllButFirst: true}})) // Minify Css
    	.pipe(gulp.dest('./'))
});

gulp.task('js', function(){
    return gulp.src(['js/jquery-1.11.3.min.js', 'js/bootstrap.min.js', 'js/navigation.js', 'js/skip-link-focus-fix.js'])
        .pipe(concat('master.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

gulp.task('default', ['sass', 'js'], function(){});