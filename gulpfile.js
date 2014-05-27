var gulp = require ('gulp');
var gulputil = require ('gulp');
var concat = require ('gulp-concat');
var uglify = require ('gulp-uglify');
var imagemin = require('gulp-imagemin');
var pngcrush = require('imagemin-pngcrush');

gulp.task('scripts', function (){
gulp.src ('vos/js/*.js')
	.pipe (concat('main.min.js'))
	.pipe (uglify)
	.pipe(gulp.dest('production/vos/js'))
});

gulp.task('default', function () {
    return gulp.src('img/*')
        .pipe(imagemin({
            progressive: true
            
        }))
        .pipe(gulp.dest('production/img'));

