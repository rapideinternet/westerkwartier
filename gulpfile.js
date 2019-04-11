var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "wk.test"
    });

    gulp.watch("app/style/scss/*.scss", ['sass']);
    gulp.watch("app/*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("app/style/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("app/style/css"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);