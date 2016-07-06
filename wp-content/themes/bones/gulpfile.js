var gulp = require('gulp'),
    // jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload;

    var postcss = require('gulp-postcss');
    var cssnano = require('cssnano');
    var cssnext = require('postcss-cssnext');
    var precss = require('precss');
    var autoprefixer = require('autoprefixer');


gulp.task('css', function () {
  var processors = [
    precss,
    autoprefixer({browsers: ['last 2 version']})
  ];
  return gulp.src('./library/postcss/style.css')
.pipe(postcss(processors))
.pipe(gulp.dest('./library/dest'));
});

// Статический сервер
gulp.task('browser-sync', function() {
     browserSync({
          server: {
                baseDir: "./"
          }
     });
});

// Конкатенация и минификация JS
gulp.task('scripts', function() {
    return gulp.src('library/js/**/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('library/dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('library/dist'))
        .pipe(reload({stream:true}));
});

// Изображения
gulp.task('images', function() {
  return gulp.src('library/img/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('library/dist/images'))
    .pipe(notify({ message: 'Images task complete' }));
});

// Отслеживание
gulp.task('watch', function() {

    // Отслеживание файлов .css
    gulp.watch('library/postcss/**/*.css', ['css', browserSync.reload]);

    // Отслеживание файлов .js
    gulp.watch(['library/js/**/*.js','main.js'], ['scripts', browserSync.reload]);

    // Отслеживание файлов изображений
    gulp.watch('library/img/**/*', ['images']);

    // Отслеживание всех файлов в папке dist/, перезагрузка при изменении
    gulp.watch("/**/*.php", browserSync.reload);

});

gulp.task('default', ['css', 'browser-sync', 'scripts', 'watch']);
