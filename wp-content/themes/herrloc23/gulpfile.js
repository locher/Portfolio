// Required
const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const { series } = require('gulp');
const terser = require('gulp-terser');
const eslint = require('gulp-eslint');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const webpack = require('webpack-stream');

// Files path
const src = './assets';
const dest = './dist';

/*
SASS
 */

//Compile sass + autoprefixer + soucemaps
gulp.task('sass', function () {
    return gulp.src([src + '/css/**/*.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ["./node_modules"]
        }).on('error', sass.logError))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(dest));
});

//Create a css.min for production environment
gulp.task('minify-css', async function () {
    gulp.src(dest + '/styles.css')
        .pipe(cleanCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(dest));
});

/*
IMAGES
 */

//Compress images

gulp.task('compress-images', async function () {
    return gulp.src(src + '/img/**/*')
        .pipe(gulp.dest(dest + '/img'))
});

/*
JAVASCRIPT
 */


// Define the Babel options
const babelOptions = {
    presets: ['@babel/env']
  };
  
  // Define the ESLint options
  const eslintOptions = {
    configFile: '.eslintrc'
  };
  
  // Task to compile the JavaScript files using Babel
  gulp.task('babel', () => {
    return gulp.src(src + '/js/front/main.js')
      .pipe(webpack({
        mode: 'production',
        output: {
          filename: 'main.js'
        },
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: {
                loader: 'babel-loader',
                options: babelOptions
              }
            }
          ]
        },
        resolve: {
            modules: [
              'node_modules'
            ]
          }
      }))
      .pipe(gulp.dest(dest + '/js'));
  });
  
  // Task to lint the JavaScript files using ESLint
  gulp.task('eslint', () => {
    return gulp.src(src + '/js/front/**/*.js')
      .pipe(eslint(eslintOptions))
      .pipe(eslint.format())
      .pipe(eslint.failAfterError());
  });
  
  // Task to minify the JavaScript files
  gulp.task('uglify', () => {
    return gulp.src(dest + '*.js')
      .pipe(uglify())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest(dest));
  });


  gulp.task('js-front', gulp.series('eslint', 'babel'));







gulp.task('js-admin', async function () {
    return gulp.src('assets/js/admin/**/*.js')
        .pipe(gulp.dest('dist/js/admin'))
        .pipe(terser())
        .pipe(gulp.dest('dist/js/admin'));
});

/*
COMMON TASKS
 */

//Watch

gulp.task('watch', async function () {
    //SASS
    gulp.watch([src + '/css/**/*.scss', 'gulpfile.js'], gulp.series('sass', 'minify-css'));
    //Images
    gulp.watch([src + '/img/**/*'], gulp.parallel('compress-images'));
    //Javascript
    gulp.watch([src + '/js/**/*', src + '/js/*'], gulp.parallel('js-front', 'js-admin'));
});

//Compile function
exports.compile = series('sass', 'minify-css', 'js-front', 'js-admin', 'compress-images');
