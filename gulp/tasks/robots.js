const gulp = require('gulp')
const robots = require('gulp-robots');

module.exports = function () {
	return gulp.src('src/pug/index.pug')
	.pipe(robots({
		useragent: '*',
		allow: [],
		disallow: ['/']
	}))
	.pipe(gulp.dest('html/'));
};