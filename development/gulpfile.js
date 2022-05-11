const {src, dest, watch} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const include = require('gulp-include')
const browserSync = require('browser-sync').create();
const webp = require('gulp-webp');
const ttfToWoff = require("gulp-ttf-to-woff");

// const serverUrl = 'http://focus'
const serverUrl = 'http://localhost:8888/fractales.dev'

function css() {
  return src('./src/scss/*.scss')
    .pipe(sass())
    .pipe(dest('../assets/css/'))
}

function js() {
  return src(['./src/js/*.js', './src/js/vendor/*.js', './src/js/modules/*.js', '!./src/js/**/_*.js'])
    .pipe(include())
    .pipe(dest('../assets/js/'))
}

function fonts() {
  src('./src/fonts/*.ttf')
    .pipe(ttfToWoff())
    .pipe(dest('../assets/fonts/'))    

  return src('./src/fonts/*.woff')
    .pipe(dest('../assets/fonts/'))
}

function img() {
  return src('./src/img/**/*.{svg,png,jpg,jpeg,webp}')
    .pipe(dest('../assets/img/'))
    .pipe(webp())
    .pipe(dest('../assets/img/'))
}

function dev() {
  browserSync.init({
    proxy: serverUrl,
    notify: false
  })

  watch(['./src/scss/**/*.scss'], css).on('change', browserSync.reload)
  watch(['./src/js/**/*.js'], js).on('change', browserSync.reload)
  watch(['./src/img/**/*.{svg,png,jpg,jpeg,webp}'], img).on('change', browserSync.reload)
  watch(['./src/fonts/*.*'], fonts).on('change', browserSync.reload)
  watch(['../*.php', '../templates/**/*.php', '../cases/*.php']).on('change', browserSync.reload)
}

exports.css = css
exports.dev = dev