/* Function for displaying notifications */
/* Ex. usage: addNotifications("This is an informational message", "info") */
(function ($) {
    $.extend(Notify.prototype, {
        styleDismiss: function () {
            this.$ele.find('[data-notify="dismiss"]').css({
                right: 0,
                top: 0,
                zIndex: this.settings.z_index + 2
            });
        }
    });
});
function addNotification(message, type, position){
    const SCREEN_XS_MAX = 767;
    const DEFAULT_OFFSET = 100;

    try {
        const BOTTOM_LEFT_OFFSET = parseInt($('.page-content').eq(0).css('padding-left'));
    } catch(err) {
        const BOTTOM_LEFT_OFFSET = 20;
    }

    var position = position || 'default';
    var notificationClass = 'notification-default';
    if (position == 'bottom-left') {
        notificationClass = 'notification-bottom-left';
    }

    var defaultOptions = {
        type: type,
        template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0} ' + notificationClass + '" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss"><i class="fa fa-remove"></i></button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>',
        placement: {
            from: "top",
            align: "center"
        },
        offset: {
            y: DEFAULT_OFFSET
        },
        animate: {
            enter: 'animations scaleIn',
            exit: 'animations scaleOut'
        }
    };

    if (position === 'bottom-left') {
        defaultOptions.placement = {
            from: 'bottom',
            align: 'left'
        };

        defaultOptions.offset.y = ($('.footer-content').eq(0).outerHeight() + BOTTOM_LEFT_OFFSET);

        if (window.innerWidth > SCREEN_XS_MAX) {
            defaultOptions.offset.x = $('#sidebar').outerWidth() + BOTTOM_LEFT_OFFSET;
        } else {
            defaultOptions.offset.x = BOTTOM_LEFT_OFFSET;
        }
    }

    var notify = $.notify(message, defaultOptions);
}
function realignNotifications() {
    const SCREEN_XS_MAX = 767;

    try {
        const BOTTOM_LEFT_OFFSET = parseInt($('.page-content').eq(0).css('padding-left'));
    } catch(err) {
        const BOTTOM_LEFT_OFFSET = 20;
    }

    if (window.innerWidth > SCREEN_XS_MAX) {
        $('.notification-bottom-left').css({
            'left': ($('#sidebar').outerWidth() + BOTTOM_LEFT_OFFSET)
        });
    } else {
        $('.notification-bottom-left').css({
            'left': BOTTOM_LEFT_OFFSET
        });
    }
}

function hideBodyOverlayer() {
    $('.modal-backdrop').addClass('hidden');
}

function activateDraggableForModal($modal) {
    $modal.find('.modal-content:first').draggable({
        containment: 'body',
        cancel : '.modal-body'
    });
}

/* Function for finding the highest z-index */

function findHighestZIndex(elem) {
    var elems = document.getElementsByTagName(elem);
    var highest = 0;
    for (var i = 0; i < elems.length; i++) {
        var zindex = document.defaultView.getComputedStyle(elems[i], null).getPropertyValue("z-index");
        if ((zindex > highest) && (zindex != 'auto')) {
            highest = zindex;
        }
    }
    return highest;
}

/* Function for enabling/disabling a blocking overlay */

function showThisLoader(type, colorClass) {
    type = typeof type !== 'undefined' ? type : "dots";
    colorClass = typeof colorClass !== 'undefined' ? colorClass : 'dark';

    var loader = {
        dots :  '<div class="loader-dots '+ colorClass +'">' +
        '<div class="sk-bounce1"></div>' +
        '<div class="sk-bounce2"></div>' +
        '<div class="sk-bounce3"></div>' +
        '</div>',
        cubeGrid :  '<div class="loader-cube-grid '+ colorClass +'">' +
        '<div class="sk-cube sk-cube1"></div>' +
        '<div class="sk-cube sk-cube2"></div>' +
        '<div class="sk-cube sk-cube3"></div>' +
        '<div class="sk-cube sk-cube4"></div>' +
        '<div class="sk-cube sk-cube5"></div>' +
        '<div class="sk-cube sk-cube6"></div>' +
        '<div class="sk-cube sk-cube7"></div>' +
        '<div class="sk-cube sk-cube8"></div>' +
        '<div class="sk-cube sk-cube9"></div>' +
        '</div>',
        fadingCircle:   '<div class="loader-fading-circle '+ colorClass +'">' +
        '<div class="sk-circle1 sk-circle"></div>' +
        '<div class="sk-circle2 sk-circle"></div>' +
        '<div class="sk-circle3 sk-circle"></div>' +
        '<div class="sk-circle4 sk-circle"></div>' +
        '<div class="sk-circle5 sk-circle"></div>' +
        '<div class="sk-circle6 sk-circle"></div>' +
        '<div class="sk-circle7 sk-circle"></div>' +
        '<div class="sk-circle8 sk-circle"></div>' +
        '<div class="sk-circle9 sk-circle"></div>' +
        '<div class="sk-circle10 sk-circle"></div>' +
        '<div class="sk-circle11 sk-circle"></div>' +
        '<div class="sk-circle12 sk-circle"></div>' +
        '</div>'
    };

    if(loader[type] == undefined) {
        return type;
    } else {
        return loader[type];
    }

};

(function ( $ ) {

    $.fn.blockControl = function(options) {
        var pageOverlay = false;
        var settings = $.extend({
            // These are the defaults.
            loadingIconType: "dots",
            iconColorClass: "dark",
            overlayColor: "#fff",
            target: this
        }, options);

        if(settings.target.selector == "body" || settings.target.selector == "html") {
            var pageOverlay = true;
        }

        function conditionalMessage(settings, pageOverlay){
            if (pageOverlay) {
                return '<div class="lock-center fixed">'+ showThisLoader(settings.loadingIconType, settings.iconColorClass) +'</div>'
            } else {
                return showThisLoader(settings.loadingIconType, settings.iconColorClass)
            }
        }

        $(settings.target).block({
            message: conditionalMessage(settings, pageOverlay),
            css: {
                border: 'none',
                padding: '0',
                backgroundColor: 'transparent',
                '-webkit-border-radius': '0',
                '-moz-border-radius': '0',
                width: "auto"

            },
            overlayCSS:  {
                backgroundColor: settings.overlayColor,
                opacity:         0.6,
                cursor:          'wait'
            },
            baseZ: 2000
        });
    };
}( jQuery ));

(function ( $ ) {

    $.fn.unblockControl = function() {
        $(this).unblock();
    };

}( jQuery ));

(function ( $ ) {

    var browser = window.navigator.appName;
    var browserVersion = navigator.appVersion;
    var browserEngine = navigator.product;
    var platform = navigator.platform;

    console.log("Browser: " + browser + " | Version: " + browserVersion + " | Product: " + browserEngine + " | OS: " + platform);

}( jQuery ));

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function addMoreActions(context) {
    $(context).find('.more-actions').each(function() {
        var drop = new Drop({
            target: $(this)[0],
            classes: 'drop-actions',
            content:    $(this).attr('data-content'),
            position: 'bottom right',
            openOn: 'click',
            constrainToWindow: true,
            constrainToScrollParent: false,
            tetherOptions: {
                offset: '-5px 0'
            }
        });
    });
}

$(window).on('resize', function () {
    realignNotifications();
})