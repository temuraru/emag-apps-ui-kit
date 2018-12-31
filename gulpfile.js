var gulp = require('gulp');
var terser = require('gulp-terser');
var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');//does not work for less
var plumber = require('gulp-plumber');
var php2html = require("gulp-php2html");
var replace = require('gulp-replace');
var banner = require('gulp-banner');
var sourcemaps = require('gulp-sourcemaps');
var rename = require("gulp-rename");
var sass = require("gulp-sass");

var browserSync = require('browser-sync').create();

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

var export_folder = 'dist_bs4/';

const plumberInit = () => plumber(function (err) {
    console.log('error');
    console.log(err);
    this.emit('end');
});

function reload() {
    browserSync.reload();
}

/*------ styles --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('bs4_main_style.css', function () {
    return gulp.src('src/bootstrap/scss/custom-bootstrap.scss')
                .pipe(plumberInit())
                .pipe(sourcemaps.init())
                .pipe(banner(comment, {
                    pkg: pkg
                }))
                .pipe(sass())
                .pipe(rename("main_style.css"))
                .pipe(sourcemaps.write(''))
                .pipe(gulp.dest(export_folder + 'css'))
});

gulp.task('bs4_main_style.min.css', function () {
    return gulp.src('src/bootstrap/scss/custom-bootstrap.scss')
                .pipe(plumberInit())
                .pipe(banner(comment, {
                    pkg: pkg
                }))
                .pipe(sass())
                .pipe(minifyCss()) 
                .pipe(rename("main_style.min.css"))
                .pipe(gulp.dest(export_folder + 'css'))
});

gulp.task('bs4_styles',[ 'bs4_main_style.css', 'bs4_main_style.min.css' ]);

gulp.task('bs4_styles_reload',['bs4_styles'], reload);



/*------ plugin_styles -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
var distCssPluginsFolder = export_folder + 'plugins/';

//can't automate dist folder name because can be multiple plugin resource paths and we need to choose a folder name in that case
var bs4_pluginsStyles = {
    //datetimepickerStyle: { plugin_resource: ['/datetimepicker/less/bootstrap-datetimepicker.4.17.47.less'], dist_name: 'bootstrap-datetimepicker.min.css', dist_folder: 'datetimepicker/'},
    bs4_daterangepickerStyle: { plugin_resource: ['src/daterangepicker/scss/custom-daterangepicker.scss'], dist_name: 'daterangepicker.min.css', dist_folder: 'daterangepicker/' },
    bs4_chosenStyle: { plugin_resource: ['src/chosen/scss/custom-jQuery.chosen.scss'], dist_name: 'jQuery.chosen.min.css', dist_folder: 'chosen/'},
    //selectizeStyle: { plugin_resource: ['/selectize/less/custom-selectize.less'], dist_name: 'selectize.min.css', dist_folder: 'selectize/'},
    bs4_css3SpinnersStyle: { plugin_resource: ['src/css3spinners/scss/custom-css3spinners.scss'], dist_name: 'css3-spinners.min.css', dist_folder: 'css3spinners/'},
    bs4_jqgridStyle: { plugin_resource: ['src/jqgrid/scss/custom-jqgrid.scss'], dist_name: 'ui.jqgrid.min.css', dist_folder: 'jqgrid/'},
    bs4_dropzoneStyle: { plugin_resource: ['src/dropzone/scss/custom-dropzone.scss'], dist_name: 'dropzone.min.css', dist_folder: 'dropzone/'},
    bs4_magnificStyle: { plugin_resource: ['src/magnific/scss/custom-magnific.scss'], dist_name: 'magnific.min.css', dist_folder: 'magnific/'},
    //dropStyle: { plugin_resource: ['/drop/less/drop.less'], dist_name: 'drop.min.css', dist_folder: 'drop/'},
    bs4_wizardStyle: { plugin_resource: ['src/wizard/scss/custom-wizard.scss'], dist_name: 'wizard.min.css', dist_folder: 'wizard/'},
    bs4_chartStyle: { plugin_resource: ['src/chart/scss/custom-chart.scss'], dist_name: 'chart.min.css', dist_folder: 'chart/' },
    bs4_summernoteStyle: { plugin_resource: ['src/summernote/scss/custom-summernote.scss'], dist_name: 'summernote.min.css', dist_folder: 'summernote/'},
    bs4_fancytreeStyle: { plugin_resource: ['src/fancytree/scss/custom-fancytree.scss'], dist_name: 'fancytree.min.css', dist_folder: 'fancytree/'},
    bs4_prismStyle: { plugin_resource: ['src/prism/scss/custom-prism.scss'], dist_name: 'prism.min.css', dist_folder: 'prism/'},
    bs4_introStyle: { plugin_resource: ['src/intro/scss/custom-intro.scss'], dist_name: 'intro.min.css', dist_folder: 'intro/'},
    bs4_hierarchicalselectStyle: { plugin_resource: ['src/hierarchicalselect/scss/hierarchicalselect.scss'], dist_name: 'hierarchicalselect.min.css', dist_folder: 'hierarchicalselect/'},
    bs4_multiselectStyle: { plugin_resource: ['src/bootstrap-multiselect/scss/custom-bootstrap-multiselect.scss'], dist_name: 'bootstrap-multiselect.min.css', dist_folder: 'bootstrap-multiselect/'},
    bs4_customScrollbarStyle: { plugin_resource: ['src/jquery-custom-scrollbar/scss/custom-scrollbar.scss'], dist_name: 'jquery-custom-scrollbar-0.5.5.min.css', dist_folder: 'jquery-custom-scrollbar/'}
}

for (var key in bs4_pluginsStyles){
    for (var j = 0; j < bs4_pluginsStyles[key].plugin_resource.length; j++) {
        bs4_pluginsStyles[key].plugin_resource[j] = bs4_pluginsStyles[key].plugin_resource[j];
    }
    bs4_pluginsStyles[key].dist_folder = distCssPluginsFolder + bs4_pluginsStyles[key].dist_folder;
}

var bs4_plugin_styles = Object.keys(bs4_pluginsStyles);

bs4_plugin_styles.forEach(function (taskName) {
    gulp.task(taskName, function () {
        console.log(bs4_pluginsStyles[taskName].plugin_resource)
        return gulp.src(bs4_pluginsStyles[taskName].plugin_resource)
                    .pipe(plumberInit())
                    .pipe(sass({}))
                    .pipe(concat('style.css'))
                    .pipe(minifyCss())
                    .pipe(rename(bs4_pluginsStyles[taskName].dist_name))
                    .pipe(gulp.dest(bs4_pluginsStyles[taskName].dist_folder))
    });
});

gulp.task('bs4_jqueryUiStyle', function () {
    return gulp.src(['./node_modules/jquery-ui/themes/base/all.css'])
                        .pipe(plumberInit())
                        .pipe(less({}))
                        .pipe(minifyCss())
                        .pipe(rename('jquery-ui-custom.1.12.1.min.css'))
                        .pipe(gulp.dest(export_folder + 'css/lib'))
})

bs4_plugin_styles.push('bs4_jqueryUiStyle');

gulp.task('bs4_plugin_styles', bs4_plugin_styles);

gulp.task('bs4_plugin_styles_reload',['bs4_plugin_styles'], reload);




/*------ presentation_site -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('bs4_presentation_site', function(){
    var presentation_site =  gulp.src('src/others/scss/custom-presentation.scss')
                            .pipe(plumberInit())
                            .pipe(sourcemaps.init())
                            .pipe(banner(comment, {
                                pkg: pkg
                            }))
                            .pipe(sass({}))
                            .pipe(sourcemaps.write(''))
                            .pipe(gulp.dest(export_folder + 'css')) 
                            .pipe(minifyCss())
                            .pipe(rename("custom-presentation.min.css"))
                            .pipe(gulp.dest(export_folder + 'css')) 

    return presentation_site;
});




/*------ scripts -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('bs4_scripts', function() {
    return gulp.src([
                    'src/others/js/custom-photonTranslations.js',
                    'node_modules/nprogress/nprogress.js',
                    'node_modules/bootstrap/dist/js/bootstrap.js',
                    'src/jquery-custom-scrollbar/js/jquery.custom-scrollbar.js', // it is concatenated in plugins scripts to
                    'src/others/js/custom-sidebar.js',
                    'src/others/js/custom-photonDataFormatter.js',
                    'node_modules/bootstrap4-notify/bootstrap-notify.min.js', //css is not loaded
                    'node_modules/blockui-npm/jquery.blockUI.js',
                    'src/others/js/custom-photonModal.js',
                    'src/others/js/custom-input.js',
                    'src/others/js/custom-tooltip.js',
                    'src/others/js/custom-popover.js',
                    'src/others/js/custom-setup.js'
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
});

gulp.task('bs4_scripts_reload',['bs4_scripts'], reload);




/*------ plugin_scripts -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 

var distJsPluginsFolder = export_folder + 'plugins/';
var pluginsScripts = {
    //selectizeJs: { plugin_resource: ['/selectize/js/selectize.js'], dist_name: 'selectize.min.js', dist_folder: 'selectize/'},
    bs4_inputlimiterJs: { plugin_resource: ['node_modules/jquery-inputlimiter/jquery.inputlimiter.js'], dist_name: 'jQuery.inputlimiter.min.js', dist_folder: 'inputlimiter/'},
    bs4_jqGridJs: { plugin_resource: ['node_modules/jqGrid/js/jquery.jqGrid.js','src/jqgrid/js/custom-photonJqGrid.js'], dist_name: 'jquery.jqGrid.min.js', dist_folder: 'jqgrid/'},
    bs4_stickyKitJs: { plugin_resource: ['node_modules/sticky-kit/dist/sticky-kit.js', 'src/sticky-kit/js/custom-sticky-kit.js'], dist_name: 'stickyKit.min.js', dist_folder: 'stickyKit/'},
    bs4_introJs: { plugin_resource: ['node_modules/intro.js/intro.js'], dist_name: 'intro.min.js', dist_folder: 'intro/'},
    bs4_hierarchicalselectJs: { plugin_resource: ['src/hierarchicalselect/js/hierarchicalselect.js'], dist_name: 'hierarchicalselect.min.js', dist_folder: 'hierarchicalselect/'},
    bs4_bootstrapMultiselectJs:{ plugin_resource: ['node_modules/bootstrap-multiselect/dist/js/bootstrap-multiselect.js'], dist_name: 'bootstrap-multiselect.min.js', dist_folder: 'bootstrap-multiselect/'},
    bs4_jqueryCountdownJs: { plugin_resource: ['node_modules/moment-timezone/moment-timezone.js','node_modules/jquery-countdown/dist/jquery.countdown.js'], dist_name: 'countdown.min.js', dist_folder: 'countdown/'},
    bs4_jQueryChosenJs: { plugin_resource: ['node_modules/chosen-js/chosen.jquery.js', 'src/chosen/js/custom-chosen.ajax.js'], dist_name: 'jQuery.chosen.min.js', dist_folder: 'chosen/'},
    bs4_summernoteJs: { plugin_resource: ['node_modules/bs4-summernote/dist/summernote.js','node_modules/summernote-cleaner/summernote-cleaner.js'], dist_name: 'summernote.min.js', dist_folder: 'summernote/'},
    bs4_dropzoneJs: { plugin_resource: ['node_modules/dropzone/dist/dropzone.js'], dist_name: 'dropzone.min.js', dist_folder: 'dropzone/'},
    bs4_magnificJs: { plugin_resource: ['node_modules/magnific-popup/dist/jquery.magnific-popup.js'], dist_name: 'magnific.min.js', dist_folder: 'magnific/'},
    //tetherJs: { plugin_resource: ['/tether/js/tether.1.4.4.js'], dist_name: 'tether.min.js', dist_folder: 'tether/'},
    //dropJs: { plugin_resource: ['/drop/js/drop.js'], dist_name: 'drop.min.js', dist_folder: 'drop/'},
    bs4_jQueryCookieJs: { plugin_resource: ['node_modules/jquery.cookie/jquery.cookie.js'], dist_name: 'jQueryCookie.min.js', dist_folder: 'jQueryCookie/'},
    bs4_wizardJs: { plugin_resource: ['node_modules/fuelux/js/wizard.js'], dist_name: 'wizard.min.js', dist_folder: 'wizard/'},
    bs4_chartJs: { plugin_resource: ['node_modules/chart.js/dist/Chart.js'], dist_name: 'chart.min.js', dist_folder: 'chart/'},
    bs4_fancytreeJs: { plugin_resource: ['node_modules/jquery.fancytree/dist/modules/jquery.fancytree.js', 'node_modules/jquery.fancytree/dist/modules/jquery.fancytree.filter.js', 'src/fancytree/js/custom-fancytree.js'], dist_name: 'fancytree.min.js', dist_folder: 'fancytree/'},
    bs4_prismJs: { plugin_resource: ['node_modules/prismjs/prism.js'], dist_name: 'prism.min.js', dist_folder: 'prism/'},
    bs4_customScrollbarJs: { plugin_resource: ['src/jquery-custom-scrollbar/js/jquery.custom-scrollbar.js'], dist_name: 'jquery.custom-scrollbar.min.js', dist_folder: 'jquery-custom-scrollbar/'}, //does not have a npm package
    bs4_daterangepickerJs: { plugin_resource: ['node_modules/daterangepicker/daterangepicker.js'], dist_name: 'daterangepicker.min.js', dist_folder: 'daterangepicker/'},
    //datetimepickerJs: { plugin_resource: ['/datetimepicker/js/bootstrap-datetimepicker.4.17.47.js'], dist_name: 'bootstrap-datetimepicker.min.js', dist_folder: 'datetimepicker/'},
    bs4_tablePasterJs: { plugin_resource: ['src/table-paster/js/table-paster.js'], dist_name: 'table-paster.min.js', dist_folder: 'table-paster/'}
}

for (var key in pluginsScripts) {
    for (var j = 0; j < pluginsScripts[key].plugin_resource.length; j++) {
        pluginsScripts[key].plugin_resource[j] = pluginsScripts[key].plugin_resource[j];
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
    });
});

gulp.task('bs4_plugin_scripts', plugin_scripts);

gulp.task('bs4_plugin_scripts_reload',['bs4_plugin_scripts'], reload);


/*------ php2html --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('bs4_php2html', function () {
    return gulp.src('demo/*.php')
                .pipe(plumberInit())
                .pipe(php2html())
                .pipe(replace('.php', '.html'))
                .pipe(gulp.dest('demo'))      
})



gulp.task('bs4_php2html_reload',['bs4_php2html'], reload);


gulp.task('dist_to_dist_bs4',['bs4_php2html_reload'], function () {
    return gulp.src('demo/*.html')
                .pipe(replace('dist\/', 'dist_bs4\/'))
                .pipe(gulp.dest('demo'))      
})

/*------ Watch and reload --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('add_browsersync_script', function () {
    return gulp.src('demo/*.html')
                .pipe(replace('\<script async=\"\" src=\"http:\/\/localhost:3000\/browser-sync\/browser-sync-client.js\"\>\<\/script\>', ''))
                .pipe(replace('\<\/head\>', '\<script async=\"\" src=\"http:\/\/localhost:3000\/browser-sync\/browser-sync-client.js\"\>\<\/script\>\<\/head\>'))
                .pipe(gulp.dest('demo'))      
})

gulp.task('watch', ['add_browsersync_script'],function() {
    browserSync.init({
        startPath: '/demo',
        server: {
            baseDir: "./",
            routes: {
                '/emag-apps-ui-kit/demo': './demo',
                '/emag-apps-ui-kit/dist_bs4': './dist_bs4'
            }
        }
        
    });

    // gulp.watch('./data/plugins/**/*.less',['bs4_plugin_styles_reload']);
    // gulp.watch('./data/styles/**/*.less',['bs4_styles_reload']);
    // gulp.watch('./data/plugins/**/*.js',['bs4_plugin_scripts_reload']);
    // gulp.watch('./data/scripts/**/*.less',['bs4_scripts_reload']);
    // gulp.watch('./demo/**/*.php',['php2html_reload']);

    gulp.watch(['./src/**/*.scss','!./src/bootstrap/**/*.scss'],['bs4_plugin_styles_reload']);
    gulp.watch('./src/bootstrap/**/*.scss',['bs4_styles_reload']);
    gulp.watch(['./src/**/*.js','!./src/**/*.js'],['bs4_plugin_scripts_reload']);
    gulp.watch('./src/**/*.js',['bs4_scripts_reload']);
    gulp.watch('./demo/**/*.php',['dist_to_dist_bs4']);
});

/*------ END Watch and reload --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 

/*------ BEFORE commit run clean_html task --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
gulp.task('clean_html', function () {
    return gulp.src('demo/*.html')
                .pipe(replace('\<script async=\"\" src=\"http:\/\/localhost:3000\/browser-sync\/browser-sync-client.js\"\>\<\/script\>', ''))
                .pipe(gulp.dest('demo'))      
})




/*------ END Watch and reload --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 







