const {src, dest, watch, series, parallel} = require('gulp');
const del = require('del');
const sass = require('gulp-sass')(require('sass'));
const gcmq = require('gulp-group-css-media-queries');
const include = require('gulp-include')
const browserSync = require('browser-sync').create();
const webp = require('gulp-webp');
const ttfToWoff = require("gulp-ttf-to-woff");
const gulpIf = require('gulp-if');
const ifElse = require('gulp-cond');
const csso = require('gulp-csso');
const combine = require('stream-combiner2').obj;
const uglify = require('gulp-uglify-es').default;
const ghPages = require('gulp-gh-pages');

// const serverUrl = 'http://focus'
const serverUrl = 'http://localhost:8888/fractales.dev'

const isProd = process.env.NODE_ENV === 'production'

function css() {
  return src('./src/scss/*.scss')
    .pipe(sass())
    .pipe(gulpIf(isProd, combine(
      gcmq(),
      csso()
    )))
    .pipe(ifElse(isProd, dest('../.build/assets/css/'), dest('../assets/css/')))
}

function js() {
  return src(['./src/js/*.js', './src/js/vendor/*.js', './src/js/modules/*.js', '!./src/js/**/_*.js'])
    .pipe(include())
    .pipe(gulpIf(isProd, uglify()))
    .pipe(ifElse(isProd, dest('../.build/assets/js/'), dest('../assets/js/')))
}

function fonts() {
  src('./src/fonts/*.ttf')
    .pipe(ttfToWoff())
    .pipe(dest('../assets/fonts/'))    
    .pipe(ifElse(isProd, dest('../.build/assets/fonts/'), dest('../assets/fonts/')))    

  return src('./src/fonts/*.woff')    
    .pipe(ifElse(isProd, dest('../.build/assets/fonts/'), dest('../assets/fonts/')))  
}

function img() {
  return src('./src/img/**/*.{svg,png,jpg,jpeg,webp}')
    .pipe(dest('../assets/img/'))  
    .pipe(ifElse(isProd, dest('../.build/assets/img/'), dest('../assets/img/')))  
    .pipe(webp())
    .pipe(ifElse(isProd, dest('../.build/assets/img/'), dest('../assets/img/')))  
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

function clean() {
  const destFolder = isProd ? ['../.build'] : ['../assets']
  return del(['../.build'], {force: true})
}

// для production env
function php() {
  src('../*.htaccess')
    .pipe(dest('../.build'))

  return src('../**/*.php')
   .pipe(dest('../.build'))
}

function gitProduction() {
  return src(['../.build/**/*'])
    .pipe(ghPages({
      branch: 'prod'
    }))
}

exports.css = css
exports.dev = series(clean, parallel(css, js, img, fonts), dev)
exports.build = series(clean, parallel(css), gitProduction)
