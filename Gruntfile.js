module.exports = function(grunt){
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			'default': {
				files: ['Gruntfile.js', 'sass/*.scss'],
				tasks: ['sass:dev', 'autoprefixer']
			},
			'svg': {
				files: ['Gruntfile.js', 'img/svg-dev/*.svg'],
				tasks: ['svgmin']
			}
		},
		sass: {
			options:{
				sourceMap: true,
				outFile: "style.css",
			},
			dev: {
				files: {
					'style.css': 'sass/styles.scss',
				},
				options:{
					style: 'expanded',
				},
			},
		},
		autoprefixer: {
			options: {
				browsers: ['last 3 versions', 'Android >= 2.1', 'iOS >= 7'],
				map: {
					annotation: 'style.css.map',
				}
				
			},
			prefix: {
				src: 'style.css',
				dest: 'style.css'
			},
		},
		svg_sprite: {
	        prod: {
	            expand: true,
			    cwd: 'img',
			    src: ['svg-dev/*.svg'],
			    dest: '',

			    options:{
			    	shape:{
			    		spacing: {
			    			padding: 10,
			    		},
			    		dest: ''
			    	},
			    	mode:{
			    		view:{
			    			render:{
			    				scss:{
			    					dest: '../../sass/_svg.scss'
			    				}
			    			},
			    			prefix: '.',
			    			dest: 'img/prod'
			    		}
			    	}
			    }
	        },
	    },
	    svgmin: {
	        options: {
	            plugins: [
	                { removeViewBox: false },
	                { removeUselessStrokeAndFill: false }
	            ]
	        },
	        dist: {
	            files: [{
                    expand: true,
                    cwd: 'img/svg-dev',
                    src: '*.svg',
                    dest: 'img/svg-prod'
                }]
	        }
	    },
	});
	
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-svg-sprite');
	grunt.loadNpmTasks('grunt-svgmin');
}