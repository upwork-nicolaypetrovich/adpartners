'use strict';


// loading libraries
const   gulp = require('gulp'),
     plumber = require('gulp-plumber'),
  sourcemaps = require('gulp-sourcemaps'),
        sass = require('gulp-sass'),
autoprefixer = require('gulp-autoprefixer'),
        svgo = require('gulp-svgo'),
        open = require('gulp-open');


// loading compiler
sass.compiler = require('node-sass');


// server data
const serverUrl = 'http://www.wdscode.guru/adpartners.git/';
const serverUrlAdmin = 'http://www.wdscode.guru/adpartners.git/wp-admin/';
const serverUrlTemplates = 'https://projects.invisionapp.com/d/main/default/#/console/15896968/335381440/preview';
const teamwork = 'https://iigglobal.teamwork.com/index.cfm#/projects/353866/tasks';


// watching files
const watchingFiles = [
        '*.svg',
        '*.sass',
        '**/*.svg',
        '**/*.sass'
    ];


// main launcher tasks
exports.default = gulp.series(images, browser, watcher);


// images optimizer
function images(cb) {
    gulp.src(['*.svg','**/*.svg'])
        .pipe(svgo())
        .pipe(gulp.dest(function(file) {
            return file.base;
        }))
        .on('finish', function() {
            cb();
        });
}


// opening project in browser
function browser(cb) {
    gulp.src(__filename)
        .pipe(open({uri: teamwork}))
        .pipe(open({uri: serverUrlTemplates}))
        .pipe(open({uri: serverUrl}))
        .pipe(open({uri: serverUrlAdmin}));
    cb();
}


// main watcher
function watcher(cb) {
    gulp.watch(watchingFiles,
        { ignoreInitial: false, delay: 100 },
        gulp.series(sassCompiler)
    );
}


// sass compiler
function sassCompiler(cb) {
    gulp.src('./assets/style.sass')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(autoprefixer({
            browsers: [ 'last 3 versions', 'ie >= 10' ],
            cascade: false
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(function(file) {
            return file.base;
        }))
        .on('finish', function() {
            cb();
        });
}
