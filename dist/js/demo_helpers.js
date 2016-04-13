

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

function cutWhiteSpace() {
    var offset = escapeHtml(example).match(/^\s+/)[0].length;
    code = escapeHtml(example).split('\n').map(function (line) {
        return line.slice(offset - 1);
    });
}

function showcasing() {
    $('.show-panel-example').each(function () {
        var example = $(this).find('[data-showcase="example"]').html();        
        if(example){
            
            $(this).find('[data-showcase="code"]').append(code.join('\n'));
        }
    });
};

// This function is just for demo purposes. It controls the way the expanding sidebar menu is displayed.
function staticNavigation() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "").replace('_new', '').replace('_edit', '').replace('_result', '');
    path = decodeURIComponent(path);

    //console.log("path: " + path);

    $("#sidebar .menu-item > a").each(function () {
        var href = $(this).attr('href');
        console.log("menu: " + href);
        if (path.match(href)) {
            $(this).parents('.menu-item-has-children').addClass('active');
            $(this).closest('.menu-item').addClass('active');
        }
    });
}