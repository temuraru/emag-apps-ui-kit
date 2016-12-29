

//----------------------------------------------
//
// Before you dive into these functions, remember that we've included them in the bundle just for demo purposes
//
//----------------------------------------------

function escapeHtml(unsafe) {
    return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
};

function typeOfTag($obj) {
    if ($obj.is('script')) {
        if ($obj.attr('src')) {
            return 'script-external';
        } else if ($obj.attr('src') == undefined) {
            return 'script-same-page';
        }
    }
    if ($obj.is('style')) {
        return 'style-same-page';
    }
    if ($obj.is('link')) {
        return 'style-external';
    }
}

function getFormattedCode(htmlContent) {
    var offset = escapeHtml(htmlContent).match(/^\s+/)[0].length;
    var codeLines = escapeHtml(htmlContent).split('\n');

    if (codeLines[0].slice(offset - 1) == '') {
        codeLines.shift();
    }

    return code = codeLines.map(function (line) {
        return line.slice(offset - 1);
    }).join('\n');
}

function getFormattedDependencies(dependencies) {
    var dependenciesArr = dependencies.split(",");
    var createStringOfDependencies = '';
    for (var i = 0; i < dependenciesArr.length; i++) {
        createStringOfDependencies += '[data-dependency-name="' + dependenciesArr[i] + '"],'
    }
    createStringOfDependencies = createStringOfDependencies.slice(0, -1).toString();
    return createStringOfDependencies;
}

function generateDependencyCode($module,$dependency){
    var $moduleParrent = $module.parent();
    switch (typeOfTag($dependency)) {
        case 'script-external':
            $moduleParrent.find('.js-source code').append('&lt;script src="' + $dependency.attr('src') + '"&gt;&lt;\/script&gt;\n');
            break;
        case 'script-same-page':
            var codeJs = $dependency.html();
            var formattedJs = getFormattedCode(codeJs);
            formattedJs = "&lt;script&gt;" + formattedJs + "&lt;/script&gt;\n";
            $moduleParrent.find('.js-source code').append(formattedJs);
            break;
        case 'style-external':
            $moduleParrent.find('.css-source code').append('&lt;link rel="stylesheet" href="' + $dependency.attr('href') + '"&gt;\n');
            break;
        case 'style-same-page':
            var codeStyle = $dependency.html();
            var formattedStyle = getFormattedCode(codeStyle);
            formattedStyle = "&lt;style&gt;" + formattedStyle + "&lt;/style&gt;\n";
            $moduleParrent.find('.css-source code').append(formattedStyle);
            break;
    }
}

function showPageCode() {

    $('[data-showcase="example"]').each(function () {

        var $this = $(this);
        var example = $this.html();

        if (example) {
            var formattedHtml = getFormattedCode(example);
            $this.parent().find('.html-source code').append(formattedHtml);

            var dependencies = $this.attr('data-dependencies');
            if (dependencies) {
                $(getFormattedDependencies(dependencies)).each(function () {
                    var $dependency = $(this);
                    generateDependencyCode($this,$dependency);
                });
            }
        }
    });
}


function updateSideBarCode(event) {
    var fixedStatus = $('input[name="sidebar_fixed_status"]:checked').val();
    var expandedStatus = $('input[name="sidebar_expanded_status"]:checked').val();
    var sidebarClasses = 'sidebar';
    var controlButtonIconClasses = 'menu-icon fa';

    if (fixedStatus == 'fixed') {
        sidebarClasses += ' sidebar-fixed';
    }

    switch (expandedStatus) {
        case 'expanded' :
            controlButtonIconClasses += ' fa-arrow-left';
            break;
        case 'collapsed' :
            sidebarClasses += ' sidebar-min';
            controlButtonIconClasses += ' fa-arrow-right';
            break;
    }

    var $sidebarClasses = $('#sidebar_code code > span').find('.attr-value').eq(1);
    var $sidebarToggleButtonIcon = $('#sidebar_code code > span').eq(60).find('.attr-value').eq(0);

    //add color
    switch (event.target.value){
        case 'collapsed':
        case 'expanded':
            $sidebarClasses.css({'background':'red'});
            $sidebarToggleButtonIcon.css({'background':'red'});
            break;
        case 'unfixed':
        case 'fixed':
            $sidebarClasses.css({'background':'red'});
            $sidebarToggleButtonIcon.css({'background':'none'});
            break;
    }

    //write text
    $sidebarClasses.contents().eq(2)[0]['data'] = sidebarClasses;
    $sidebarToggleButtonIcon.contents().eq(2)[0]['data'] = controlButtonIconClasses;


}

function updateFooterBarCode() {
    var fixedStatus = $('input[name="footer_fixed_status"]:checked').val();
    switch (fixedStatus) {
        case 'fixed' :
            $('#footer_fixed_code').removeClass('hide');
            $('#footer_unfixed_code').addClass('hide');
            break;
        case 'unfixed' :
            $('#footer_fixed_code').addClass('hide');
            $('#footer_unfixed_code').removeClass('hide');
            break;
    }
}


// This function is just for demo purposes. It controls the way the expanding sidebar menu is displayed.
function staticNavigation() {
    var path = window.location.pathname + window.location.hash;

    $("#sidebar .menu-item").removeClass('active');

    $("#sidebar .menu-item > a").each(function () {
        var href = $(this).attr('href');
        if (href == '#') {
            href = $(this).attr('data-href');
        }
        if (path == href) {
            $(this).parents('.menu-item-has-children').addClass('active');
            $(this).closest('.menu-item').addClass('active');
        }
    });

    $(window).resize();
}

function demoHelpers() {
    staticNavigation();
    $(window).on('hashchange', function() {
        staticNavigation();
    });
}