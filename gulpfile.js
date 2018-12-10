var gulp = require('gulp');
var terser = require('gulp-terser');
var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');//nu merge pentru less
var plumber = require('gulp-plumber');
var php2html = require("gulp-php2html");
var replace = require('gulp-replace');
var banner = require('gulp-banner');
var sourcemaps = require('gulp-sourcemaps');
var rename = require("gulp-rename");

var livereload = require('gulp-livereload');

//less plugins: 
var less = require('gulp-less');
var LessAutoprefix = require('less-plugin-autoprefix');
var lessAutoprefix = new LessAutoprefix({
    browsers: ['last 2 versions']
});
//end less plugins: 

var pkg = require('./package.json');
var data_scripts = pkg.data_scripts;
var data_plugins = pkg.data_plugins;

var comment = '/*!\n' +
            ' * eMAG Apps UI KIT v<%= pkg.version %>' +
            ' * Copyright 2001-<%= new Date().getFullYear() %> <%= pkg.author %>\n' +
            ' * Licensed under the <%= pkg.license %> license\n' +
            ' */\n';

var export_folder = 'dist/';

const plumberInit = () => plumber(function (err) {
    console.log('error');
    console.log(err);
    this.emit('end');
})

function reload(){
    return gulp.src('demo/*.html')
                .pipe(livereload())
}

/*------ styles --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('main_style.css', function () {
    return gulp.src('data/styles/base/bootstrap.less')
                .pipe(plumberInit())
                .pipe(sourcemaps.init())
                .pipe(banner(comment, {
                    pkg: pkg
                }))
                .pipe(less({
                    plugins: [lessAutoprefix]
                }))
                .pipe(rename("main_style.css"))
                .pipe(sourcemaps.write(''))
                .pipe(gulp.dest(export_folder + 'css'))
                //.pipe(livereload())
})

gulp.task('main_style.min.css', function () {
    return gulp.src('data/styles/base/bootstrap.less')
                .pipe(plumberInit())
                .pipe(banner(comment, {
                    pkg: pkg
                }))
                .pipe(less({
                    plugins: [lessAutoprefix]
                }))
                .pipe(minifyCss()) 
                .pipe(rename("main_style.min.css"))
                .pipe(gulp.dest(export_folder + 'css'))
                //.pipe(livereload())
})

gulp.task('main_style_dark.css', function () {
    return gulp.src('data/styles/base/dark/bootstrap_dark.less') 
                .pipe(plumberInit())
                .pipe(sourcemaps.init()) 
                .pipe(banner(comment, {
                    pkg: pkg
                }))
                .pipe(less({
                    plugins: [lessAutoprefix]
                }))
                .pipe(rename("main_style_dark.css"))
                .pipe(sourcemaps.write(''))
                .pipe(gulp.dest(export_folder + 'css'))
                //.pipe(livereload())

})

gulp.task('main_style_dark.min.css', function () {
    return gulp.src('data/styles/base/dark/bootstrap_dark.less')
                .pipe(plumberInit())
                .pipe(banner(comment, {
                    pkg: pkg
                }))
                .pipe(less({
                    plugins: [lessAutoprefix]
                }))
                .pipe(minifyCss()) 
                .pipe(rename("main_style_dark.min.css"))
                .pipe(gulp.dest(export_folder + 'css'))
                //.pipe(livereload())
})

gulp.task('styles',[ 'main_style.css', 'main_style.min.css', 'main_style_dark.css', 'main_style_dark.min.css' ])

gulp.task('styles_livereload',['styles'], reload)

/*------ plugin_styles -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
var distCssPluginsFolder = export_folder + 'plugins/';

//can't automate dist folder name because can be multiple plugin resource paths and we need to choose a folder name in that case
var pluginsStyles = {
    datetimepickerStyle: { plugin_resource: ['/datetimepicker/less/bootstrap-datetimepicker.4.17.47.less'], dist_name: 'bootstrap-datetimepicker.min.css', dist_folder: 'datetimepicker/'},
    daterangepickerStyle: { plugin_resource: ['/daterangepicker/less/daterangepicker.less'], dist_name: 'daterangepicker.min.css', dist_folder: 'daterangepicker/' },
    chosenStyle: { plugin_resource: ['/chosen/less/custom-jQuery.chosen.less'], dist_name: 'jQuery.chosen.min.css', dist_folder: 'chosen/'},
    selectizeStyle: { plugin_resource: ['/selectize/less/custom-selectize.less'], dist_name: 'selectize.min.css', dist_folder: 'selectize/'},
    css3SpinnersStyle: { plugin_resource: ['/css3spinners/less/css3-spinners.less'], dist_name: 'css3-spinners.1.2.2.min.css', dist_folder: 'css3spinners/'},
    jqgridStyle: { plugin_resource: ['/jqgrid/less/custom-jqgrid.less'], dist_name: 'ui.jqgrid.min.css', dist_folder: 'jqgrid/'},
    dropzoneStyle: { plugin_resource: ['/dropzone/less/dropzone.less'], dist_name: 'dropzone.min.css', dist_folder: 'dropzone/'},
    magnificStyle: { plugin_resource: ['/magnific/less/magnific.less'], dist_name: 'magnific.min.css', dist_folder: 'magnific/'},
    dropStyle: { plugin_resource: ['/drop/less/drop.less'], dist_name: 'drop.min.css', dist_folder: 'drop/'},
    wizardStyle: { plugin_resource: ['/wizard/less/custom-wizard.less'], dist_name: 'wizard.min.css', dist_folder: 'wizard/'},
    chartStyle: { plugin_resource: ['/chart/less/custom-chart.less'], dist_name: 'chart.min.css', dist_folder: 'chart/' },
    summernoteStyle: { plugin_resource: ['/summernote/less/custom-summernote.less'], dist_name: 'summernote.min.css', dist_folder: 'summernote/'},
    fancytreeStyle: { plugin_resource: ['/fancytree/less/ui.fancytree.less'], dist_name: 'fancytree.min.css', dist_folder: 'fancytree/'},
    prismStyle: { plugin_resource: ['/prism/less/prism.less'], dist_name: 'prism.min.css', dist_folder: 'prism/'},
    introStyle: { plugin_resource: ['/intro/less/introjs.less','/intro/less/introjs.custom.less'], dist_name: 'intro.min.css', dist_folder: 'intro/'},
    hierarchicalselectStyle: { plugin_resource: ['/hierarchicalselect/less/hierarchicalselect.less'], dist_name: 'hierarchicalselect.min.css', dist_folder: 'hierarchicalselect/'},
    multiselectStyle: { plugin_resource: ['/bootstrap-multiselect/less/bootstrap-multiselect.less'], dist_name: 'bootstrap-multiselect.min.css', dist_folder: 'bootstrap-multiselect/'},
    customScrollbarStyle: { plugin_resource: ['/jquery-custom-scrollbar/less/jquery-custom-scrollbar-0.5.5.custom.less'], dist_name: 'jquery-custom-scrollbar-0.5.5.min.css', dist_folder: 'jquery-custom-scrollbar/'}
}

for (var key in pluginsStyles){
    //add 'data/plugins/' string to path
    for (var j = 0; j < pluginsStyles[key].plugin_resource.length; j++) {
        pluginsStyles[key].plugin_resource[j] = data_plugins + pluginsStyles[key].plugin_resource[j];
    }
    pluginsStyles[key].dist_folder = distCssPluginsFolder + pluginsStyles[key].dist_folder;
}

var plugin_styles = Object.keys(pluginsStyles);

plugin_styles.forEach(function (taskName) {
    gulp.task(taskName, function () {
        return gulp.src(pluginsStyles[taskName].plugin_resource)
                    .pipe(plumberInit())
                    .pipe(less({}))
                    .pipe(concat('style.css'))
                    .pipe(minifyCss())
                    .pipe(rename(pluginsStyles[taskName].dist_name))
                    .pipe(gulp.dest(pluginsStyles[taskName].dist_folder))
                    //.pipe(livereload())
    });
});

gulp.task('jqueryUiStyle', function () {
    return gulp.src(['data/styles/lib/jquery_ui/less/all.less'])
                        .pipe(plumberInit())
                        .pipe(less({}))
                        .pipe(minifyCss())
                        .pipe(rename('jquery-ui-custom.1.11.4.min.css'))
                        .pipe(gulp.dest(export_folder + 'css/lib'))
                        //.pipe(livereload())
})

plugin_styles.push('jqueryUiStyle')

gulp.task('plugin_styles', plugin_styles);

gulp.task('plugin_styles_livereload',['plugin_styles'], reload);


/*------ presentation_site -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('presentation_site', function(){
    var presentation_site =  gulp.src('data/styles/base/custom/custom-presentation.less')
                            .pipe(plumberInit())
                            .pipe(sourcemaps.init())
                            .pipe(banner(comment, {
                                pkg: pkg
                            }))
                            .pipe(less({
                                plugins: [lessAutoprefix]
                            }))
                            .pipe(sourcemaps.write(''))
                            .pipe(gulp.dest(export_folder + 'css')) 
                            .pipe(minifyCss())
                            .pipe(rename("custom-presentation.min.css"))
                            .pipe(gulp.dest(export_folder + 'css')) 

    return presentation_site;
})


/*------ scripts -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('scripts', function() {
    return gulp.src([
                    data_scripts + '/base/custom/mod_photonTranslations.js',
                    data_plugins + '/nprogress/js/nprogress.js',
                    data_scripts + '/base/util.bs4.js',
                    data_scripts + '/base/transition.js',
                    data_scripts + '/base/alert.js',
                    data_scripts + '/base/button.js',
                    data_scripts + '/base/carousel.js',
                    data_scripts + '/base/collapse.js',
                    data_scripts + '/base/dropdown.js',
                    data_scripts + '/base/modal.js',
                    data_scripts + '/base/tooltip.bs4.js',
                    data_scripts + '/base/popover.bs4.js',
                    data_scripts + '/base/scrollspy.js',
                    data_scripts + '/base/tab.js',
                    data_scripts + '/base/affix.js',
                    data_plugins + '/jquery-custom-scrollbar/js/jquery.custom-scrollbar.js',
                    data_scripts + '/base/custom/mod_sidebar.js',
                    data_scripts + '/base/custom/mod_photonDataFormatter.js',
                    data_plugins + '/notify/js/bootstrap-notify.js',
                    data_plugins + '/blockui/js/jQuery.blockui.2.70.0.js',
                    data_scripts + '/base/custom/mod_photonModal.js',
                    data_scripts + '/base/custom/mod_customInput.js',
                    data_scripts + '/base/custom/mod_tooltip.js',
                    data_scripts + '/base/custom/mod_popover.js',
                    data_scripts + '/base/custom/custom-setup.js'
                    ])
                    .pipe(concat('main_script.js'))
                    .pipe(banner(comment, {
                        pkg: pkg
                    }))
                    .pipe(gulp.dest(export_folder + 'js'))
                    .pipe(rename({suffix: '.min'}))
                    .pipe(terser())
                    .pipe(banner(comment, {
                        pkg: pkg
                    }))
                    .pipe(gulp.dest(export_folder + 'js'))
                    //.pipe(livereload())
});

gulp.task('scripts_livereload',['scripts'], reload)


/*------ plugin_scripts -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 

var distJsPluginsFolder = export_folder + 'plugins/';
var pluginsScripts = {
    selectizeJs: { plugin_resource: ['/selectize/js/selectize.js'], dist_name: 'selectize.min.js', dist_folder: 'selectize/'},
    inputlimiterJs: { plugin_resource: ['/inputLimiter/js/jQuery.inputlimiter.1.3.1.js'], dist_name: 'jQuery.inputlimiter.1.3.1.min.js', dist_folder: 'inputlimiter/'},
    jqGridJs: { plugin_resource: ['/jqgrid/js/jquery.jqGrid.js', '/base/custom/mod_photonJqGrid.js'], dist_name: 'jquery.jqGrid.min.js', dist_folder: 'jqgrid/'},
    stickyKitJs: { plugin_resource: ['/stickyKit/js/stickyKit.js', '/stickyKit/js/stickyKitWrapper.js'], dist_name: 'stickyKit.min.js', dist_folder: 'stickyKit/'},
    introJs: { plugin_resource: ['/intro/js/intro.js'], dist_name: 'intro.min.js', dist_folder: 'intro/'},
    hierarchicalselectJs: { plugin_resource: ['/hierarchicalselect/js/hierarchicalselect.js'], dist_name: 'hierarchicalselect.min.js', dist_folder: 'hierarchicalselect/'},
    bootstrapMultiselectJs:{ plugin_resource: ['/bootstrap-multiselect/js/bootstrap-multiselect.js'], dist_name: 'bootstrap-multiselect.min.js', dist_folder: 'bootstrap-multiselect/'},
    jqueryCountdownJs: { plugin_resource: ['/countdown/js/moment-timezone-with-data.js', '/countdown/js/jquery.countdown.js'], dist_name: 'countdown.min.js', dist_folder: 'countdown/'},
    jQueryChosenJs: { plugin_resource: ['/chosen/js/chosen.jquery.js','/chosen/js/chosen.ajax.js'], dist_name: 'jQuery.chosen.min.js', dist_folder: 'chosen/'},
    summernoteJs: { plugin_resource: ['/summernote/js/summernote.js','/summernote/js/summernote-cleaner.js'], dist_name: 'summernote.min.js', dist_folder: 'summernote/'},
    dropzoneJs: { plugin_resource: ['/dropzone/js/dropzone.js'], dist_name: 'dropzone.min.js', dist_folder: 'dropzone/'},
    magnificJs: { plugin_resource: ['/magnific/js/magnific.js'], dist_name: 'magnific.min.js', dist_folder: 'magnific/'},
    tetherJs: { plugin_resource: ['/tether/js/tether.1.4.4.js'], dist_name: 'tether.min.js', dist_folder: 'tether/'},
    dropJs: { plugin_resource: ['/drop/js/drop.js'], dist_name: 'drop.min.js', dist_folder: 'drop/'},
    jQueryCookieJs: { plugin_resource: ['/jQueryCookie/js/jquery.cookie.js'], dist_name: 'jQueryCookie.min.js', dist_folder: 'jQueryCookie/'},
    wizardJs: { plugin_resource: ['/wizard/js/wizard.js'], dist_name: 'wizard.min.js', dist_folder: 'wizard/'},
    chartJs: { plugin_resource: ['/chart/js/chart.js'], dist_name: 'chart.min.js', dist_folder: 'chart/'},
    fancytreeJs: { plugin_resource: ['/fancytree/js/jquery.fancytree.js', '/fancytree/js/jquery.fancytree.filter.js', '/base/custom/mod_photonFancytree.js'], dist_name: 'fancytree.min.js', dist_folder: 'fancytree/'},
    prismJs: { plugin_resource: ['/prism/js/prism.js'], dist_name: 'prism.min.js', dist_folder: 'prism/'},
    customScrollbarJs: { plugin_resource: ['/jquery-custom-scrollbar/js/jquery.custom-scrollbar.js'], dist_name: 'jquery.custom-scrollbar.min.js', dist_folder: 'jquery-custom-scrollbar/'},
    daterangepickerJs: { plugin_resource: ['/daterangepicker/js/daterangepicker.js'], dist_name: 'daterangepicker.min.js', dist_folder: 'daterangepicker/'},
    datetimepickerJs: { plugin_resource: ['/datetimepicker/js/bootstrap-datetimepicker.4.17.47.js'], dist_name: 'bootstrap-datetimepicker.min.js', dist_folder: 'datetimepicker/'},
    tablePasterJs: { plugin_resource: ['/table-paster/table-paster.js'], dist_name: 'table-paster.min.js', dist_folder: 'table-paster/'}
}

for (var key in pluginsScripts){
    //add 'data/plugins/' string to path
    for (var j = 0; j < pluginsScripts[key].plugin_resource.length; j++) {
        if(!pluginsScripts[key].plugin_resource[j].startsWith("/base/")){
            pluginsScripts[key].plugin_resource[j] = data_plugins + pluginsScripts[key].plugin_resource[j];
        } else {
            pluginsScripts[key].plugin_resource[j] = data_scripts + pluginsScripts[key].plugin_resource[j];
        }
    }
    pluginsScripts[key].dist_folder = distJsPluginsFolder + pluginsScripts[key].dist_folder;
}

var plugin_scripts = Object.keys(pluginsScripts);

plugin_scripts.forEach(function (taskName) {
    gulp.task(taskName, function () {
        return gulp.src(pluginsScripts[taskName].plugin_resource)
            .pipe(plumberInit())
            .pipe(concat(pluginsScripts[taskName].dist_name))
            .pipe(terser())
            .pipe(banner(comment, {
                pkg: pkg
            }))
            .pipe(gulp.dest(pluginsScripts[taskName].dist_folder))
            .pipe(livereload())
    });
});

gulp.task('plugin_scripts', plugin_scripts);

gulp.task('plugin_scripts_livereload',['plugin_scripts'], reload)


/*------ php2html --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('php2html', function () {
    return gulp.src('demo/*.php')
                .pipe(plumberInit())
                .pipe(php2html())
                .pipe(replace('.php', '.html'))
                .pipe(gulp.dest('demo'))      
})

gulp.task('php2html_livereload',['php2html'], reload)

/*------ default --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('default', function(){
    
})


/*------ Watch and reload --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('watch', function(){
    var StaticServer = require('static-server');

    var server = new StaticServer({
        rootPath: './',
        port: 3000
    });

    server.start(function(){
        console.log('Server started on port ' + server.rootPath)
    });

    livereload.listen();
    gulp.watch('./data/plugins/**/*.less',['plugin_styles_livereload']);
    gulp.watch('./data/styles/**/*.less',['styles_livereload']);
    gulp.watch('./data/plugins/**/*.js',['plugin_scripts_livereload']);
    gulp.watch('./data/scripts/**/*.less',['scripts_livereload']);
    gulp.watch('./demo/**/*.php',['php2html_livereload']);
})
/*------ END Watch and reload --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
