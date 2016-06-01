// path is a node-internal module. usage: http://nodejs.org/api/path.html
var path = require('path');
var eachAsync = require('each-async');
var assign = require('object-assign');
var sass = require('node-sass');

module.exports = function(grunt) {

    // see http://gruntjs.com/configuring-tasks#globbing-patterns for patterns
    var appScriptsNoTests = [
        'TimeTracker.Web/app/**/*.js',
        /* exclude patterns begin with ! */
        '!TimeTracker.Web/app/build/*',
        '!**/*_test.js',
        '!**/*spec.js'
    ];

    // configure nodesass
    grunt.registerMultiTask('nodesass', 'Compile Sass to CSS', function () {
        eachAsync(this.files, function(el, i, next) {

            var src = el.src[0];

            // skip _*.scss files
            if (!src || path.basename(src)[0] === '_') {
                return next();
            }

            grunt.log.writeln('Processing ' + src + '...');

            var basename = path.basename(src, '.scss'),
                dirname = path.dirname(src);
            var destination = path.join(dirname, basename + '.css');
                        
            // https://github.com/sass/node-sass/releases/tag/v2.0.0-beta
            // https://github.com/sass/node-sass#examples
            sass.render({
                precision: 10,
                file: src
            }, function(error, result) { // node-style callback from v3.0.0 onwards
                if (!error) {
                    // No errors during the compilation, write this result on the disk
                    grunt.file.write(destination, result.css);
                    grunt.log.writeln('File ' + destination + ' created.');

                    next();
                } else {
                    grunt.log.writeln('An error occurred:');
                    console.log(error);

                    next(error);
                }
            });
        }.bind(this), this.async());
    });

    // Project configuration.
    grunt.initConfig({
        watch: {
            // compile sass files
            css:{
                files: ['styles/**/*.scss'],
                tasks: ['nodesass:all']
            }
        },
        nodesass: {
            options: { sourceMap: false },
            all: {
                // only provide source files, destination files will be created using <filename>.css
                src: ['styles/discoverize.scss']
            }
        }
    });

    grunt.loadNpmTasks('grunt-ng-annotate');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['ngAnnotate:dev', 'nodesass:all']);
    grunt.registerTask('live', ['ngAnnotate:live', 'nodesass:all']);
    grunt.registerTask('watch-css', ['nodesass:all', 'watch:css']);
    grunt.registerTask('watch-js', ['ngAnnotate:dev', 'watch:js']);
};