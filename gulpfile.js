var gulp = require('gulp');
var gutil = require('gulp-util');
var less = require('gulp-less');
var watch = require('gulp-watch');
var ftp = require('gulp-ftp');
var rename = require('gulp-rename');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');

var paths = {
    css:['files/**/*.less'],
    ftp:['www/tpl/css/template.css']
};

gulp.task('css', function () {
    var processor = [
        autoprefixer({browsers: ['last 2 version']}),
        cssnano()
    ];
    return gulp.src('files/less/template.less')
        .pipe(less())
        .pipe(postcss(processor))
        .pipe(rename('style.css'))
        .pipe(gulp.dest('www/tpl/css'))
        .pipe(ftp({
            host: 'ef978.mirohost.net',
            user: 'shooters',
            pass: 'F39QcXidjQxmuChy',
            remotePath: '/reserve.shooters.kiev.ua/tpl/css/'
        }))
        .on('error', gutil.log);

});

gulp.task('ftpupl', function () {
    return gulp.src('css/template.css')
        .pipe(ftp({
            host: 'ef978.mirohost.net',
            user: 'shooters',
            pass: 'F39QcXidjQxmuChy',
            remotePath: '/reserve.shooters.kiev.ua/tpl/css/'
        }));
});

gulp.task('watcher',function(){
    gulp.watch(paths.css, ['css']);
});

gulp.task('default', [
    'css',
    'watcher'
]);