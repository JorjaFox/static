module.exports = function(grunt) { 
	
	grunt.loadNpmTasks('grunt-contrib-uglify'); 
	grunt.loadNpmTasks('grunt-contrib-concat');  

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
		}
	});
  
    grunt.registerTask('default', ['concat','uglify'] );  
  
};  