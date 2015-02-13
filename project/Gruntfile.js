module.exports = function(grunt) { 
	
	grunt.loadNpmTasks('grunt-contrib-uglify');   

	grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		uglify: {
	    	my_target: {
				files: {
	        		'../code/js/jfo-content.min.js': ['../code/js/bit-slideup.js', '../code/js/rum_pingdom.js', '../code/js/rum_site247.js']
				}
	    	}
		}
	});
  
    grunt.registerTask('default', ['uglify'] );  
  
};  