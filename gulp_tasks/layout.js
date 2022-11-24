const { task, src, dest } = require('gulp');

const useref = require('gulp-useref');
const htmlMin = require('gulp-htmlmin');
const gulpif = require('gulp-if');

const paths = require('../gulpfile');

/*
- Переименовывание ассетов
- Минификация и сортировка разметки
*/

task('layout', () => src(paths.html.src)
  .pipe(useref({ searchPath: [paths.styles.src, paths.scripts.src] }))
  .pipe(gulpif(process.env.NODE_ENV === 'wordpress', htmlMin({
    removeComments: false,
    collapseWhitespace: false,
  })))
  .pipe(gulpif(process.env.NODE_ENV === 'default', htmlMin({
    removeComments: true,
    collapseWhitespace: true,
  })))
  .pipe(dest(paths.html.dist)));
