const { series } = require('gulp')
const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')
const uglifycss = require('gulp-uglifycss')

function appJS() {
    return gulp.src('js/app.js')
        .pipe(babel({
            comments: false
        }))
        .pipe(uglify())
        .pipe(gulp.dest('../build/js'))
}

function appCSS() {
    return gulp.src('css/sass/app.sass')
        .pipe(sass())
        .pipe(uglifycss())
        .pipe(gulp.dest('../build/css'))
}

function appPHP() {
    return gulp.src('index.php')
        .pipe(gulp.dest('../build'))
}

function appIMG() {
    return gulp.src('img/**')
        .pipe(gulp.dest('../build/img'))
}

module.exports.default = series(
    appJS,
    appCSS,
    appPHP,
    appIMG
)

