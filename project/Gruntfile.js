module.exports = function(grunt) { 
	
	grunt.loadNpmTasks('grunt-contrib-uglify'); 
	grunt.loadNpmTasks('grunt-contrib-concat');  
	grunt.loadNpmTasks('grunt-contrib-watch');
	
	grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

		concat: {  
		    dist: {  
		        src: '../code/js/dev/*.js',
		        dest: '../code/js/jfo-content.js',  
		    },  
		}, 

		uglify: {
            build: {  
                src: '../code/js/jfo-content.js',
                dest: '../code/js/jfo-content.min.js',
            }
		},

		watch: {  
		    scripts: {  
		        files: '../code/js/dev/*.js',
		        tasks: ['concat', 'uglify'],  
		    }
		}

	});
  
    grunt.registerTask('default', ['concat','uglify'] );  
  
};  