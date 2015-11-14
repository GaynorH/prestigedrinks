module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        compass: {                  // Task
            dist: {                   // Target
                options: {              // Target options
                    sassDir: '/template/assets/scss',
                    cssDir: '/skin/frontend/prestigedrinks/default/css',
                    environment: 'development'
                }
            }
        },
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['compass']
            },
        },
    });
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    // Default task(s).
    grunt.registerTask('default', ['compass']);

};