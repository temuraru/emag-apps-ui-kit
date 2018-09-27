/* ========================================================================
 * Photon Admin: mod_sidebar.js v1.0.2
 *
 * ========================================================================
 * Copyright 2011-2016 eMAG, Inc.
 * Licensed under MIT
 * ======================================================================== */

"use strict";

function createSidebar(data) {
    var defaultData = {
        expanded: 'expanded',           // Posible values: 'expanded', 'collapsed'
        fixed: 'fixed',                 // Posible values: 'fixed', 'un-fixed'
        menuItems: [],
        sidebarContainer: '#sidebar',
        sidebarSearchInputId: 'sidebar_menu_search',
        sidebarSearchClearButtonId: 'sidebar_menu_search_clear_button',
        sidebarSearchButtonId: 'sidebar_menu_search_button',
        noResultsMessage: 'No results found',
        withSearch: true,
        withExpandCollapseButton: true
    };

    data = $.extend({}, defaultData, data);

    var $sidebarContainer = $(data.sidebarContainer),
        menuItemsIdCount = 0,
        sidebarMenuNodes = {};

    $('body').blockControl({ blurElement: $sidebarContainer });

    var initMenuItemData = function (menuItemData) {
        var defaultMenuItemData = {
            'title': '',
            'href': '',
            'data-href': '',
            'icon': 'fa-angle-double-right'
        };

        return $.extend({}, defaultMenuItemData, menuItemData);
    },
    addMenuItemLink = function ($newMenuItem, menuItemData) {
        var $menuItemLink = $('<a>', {
            attr: {
                'href': menuItemData.href,
                'data-href': menuItemData['data-href']
            }
        });
        $menuItemLink.append($('<i>', { class: 'menu-icon fa ' + menuItemData.icon }));
        $menuItemLink.append($('<span>', {
            class: 'menu-text',
            html: menuItemData.title
        }));
        $newMenuItem.append($menuItemLink);
    },
    createMenuItemDataContainer = function (menuItemData) {
        return $('<div>', {
            class: 'menu-item-data',
            html: $('<a>', {
                class: 'menu-item-min-link',
                attr: {
                    href: menuItemData.href
                },
                html: $('<span>', {
                    class: 'menu-text',
                    html: menuItemData.title
                })
            })
        });
    },
    addMenuItemChildrenToDataContainer = function (menuItemId, $menuItemDataContainer, menuItemDataChildren) {
        var $sidebarSubmenu = $('<ul>', { class: 'sidebar-submenu' });
            
        for (var j in menuItemDataChildren) {
            $sidebarSubmenu.append(createSidebarSubmenuItem(menuItemId, menuItemDataChildren[j]));
        }
        
        $menuItemDataContainer.append($sidebarSubmenu);
    },
    createSidebarSubmenuItem = function (parentMenuItemId, data) {
        var defaultData = {
            'title': '',
            'href': ''
        };
        data = $.extend({}, defaultData, data);

        var menuItemId = getMenuItemId(data, menuItemsIdCount);
        
        sidebarMenuNodes[menuItemId] = jQuery.extend({}, data);
        sidebarMenuNodes[menuItemId].id = menuItemId;
        sidebarMenuNodes[menuItemId].parent = parentMenuItemId;
        sidebarMenuNodes[parentMenuItemId].children.push(menuItemId);

        var $newSidebarSubmenuItem = $('<li>', {
            class: 'menu-item',
            attr: {
                id: menuItemId
            },
            html: $('<a>', {
                attr: {
                    href: data.href
                },
                html: $('<span>', {
                    class: 'menu-text',
                    html: data.title
                })
            })
        });
        
        if (data.children) {
            sidebarMenuNodes[menuItemId].children = [];
            $newSidebarSubmenuItem.addClass('menu-item-has-children');
            addChildrenForSidebarSubmenuItem(menuItemId, $newSidebarSubmenuItem, data)
        }

        return $newSidebarSubmenuItem;
    },
    addChildrenForSidebarSubmenuItem = function (newSidebarSubmenuItemId, $newSidebarSubmenuItem, sidebarSubmenuItemData) {
        var $sidebar2ndSubmenuList = $('<ul>', { class: 'sidebar-submenu' });

        for (var i in sidebarSubmenuItemData.children) {
            $sidebar2ndSubmenuList.append(createSidebarSubmenuItem(newSidebarSubmenuItemId, sidebarSubmenuItemData.children[i]));
        }

        $newSidebarSubmenuItem.append($sidebar2ndSubmenuList);

        return $newSidebarSubmenuItem;
    },
    getMenuItemId = function (menuItem) {
        var menuItemId = '';
        if (menuItem.id) {
            menuItemId = menuItem.id;
        } else {
            menuItemsIdCount++;
            menuItemId = 'sidebar_menu_item_' + menuItemsIdCount;
        }

        return menuItemId;
    },
    makeParentsVisible = function (menuItemId) {
        if (sidebarMenuNodes[menuItemId].parent && sidebarMenuNodes[menuItemId].parent !== null) {
            $('#' + sidebarMenuNodes[menuItemId].parent).show();
            makeParentsVisible(sidebarMenuNodes[menuItemId].parent);
        }
    },
    addSearchEvent = function () {
        var $searchInput = $('#' + data.sidebarSearchInputId),
            typingTimer,
            doneTypingInterval = 600,
            doneTyping = function () {
                var searchString = $searchInput.val().toLowerCase(),
                    foundMenuItems = [],
                    words = searchString.split(" "),
                    searchRegex = '',
                    resultsNumber = 0;
                
                if (searchString !== '') {
                    for (var i = 0; i < words.length; i++) {
                        searchRegex += "(?=.*" + words[i] + ")";
                    }
        
                    searchRegex = new RegExp(searchRegex + ".+", "gi");
    
                    for (var i in sidebarMenuNodes) {
                        var nodeTitle = sidebarMenuNodes[i].title.toLowerCase(),
                            nodeKeywords = sidebarMenuNodes[i].keywords ? sidebarMenuNodes[i].keywords.toLowerCase() : '';
    
                        if (searchRegex.test(nodeTitle) || searchRegex.test(nodeKeywords)) {
                            resultsNumber++;
                            foundMenuItems.push(i);
                            $('#' + i).show();
                            makeParentsVisible(i);
                        } else {
                            $('#' + i).hide();
                            
                            if ($.inArray(sidebarMenuNodes[i].parent, foundMenuItems) !== -1) {
                                resultsNumber++;
                                $('#' + i).show();
                                if (sidebarMenuNodes[i].children && sidebarMenuNodes[i].children.length > 0) {
                                    foundMenuItems.push(i);
                                }
                            }
                        }
                    }
                } else {
                    for (var i in sidebarMenuNodes) {
                        resultsNumber++;
                        $('#' + i).show();
                    }
                }

                if (resultsNumber > 0) {
                    $('#sidebar_menu_item_no_results').hide();
                } else {
                    $('#sidebar_menu_item_no_results').show();
                }
            };

        $searchInput.on('keyup change paste input', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        $searchInput.on('change paste input', function () {
            clearTimeout(typingTimer);
            doneTyping();
        });

        $searchInput.on('keydown', function () {
            clearTimeout(typingTimer);
        });

        $('#' + data.sidebarSearchClearButtonId).on('click', function () {
            $searchInput.val('').focus().trigger('change');
        });

        $('#' + data.sidebarSearchButtonId).on('click', function () {
            $('#toggle-sidebar-size-btn').trigger('click');
        });
    };

    $sidebarContainer.append($('<div>', { class: 'sidebar-outer' }));
    var $sidebarInner = $('<ul>', { class: 'sidebar-inner' });

    if (data.withSearch && data.withSearch === true) {
        var $searchItem = $('<li>', {
                class: 'menu-item form-group sidebar-menu-item-search',
                attr: {
                    id: 'sidebar_menu_item_search'
                }
            }),
            $searchItem = $('<li>', {
                class: 'menu-item form-group sidebar-menu-item-search',
                attr: {
                    id: 'sidebar_menu_item_search'
                }
            });
        
        $searchItem.append($('<button>', {
            attr: {
                id: data.sidebarSearchButtonId,
                type: 'button'
            },
            class: 'btn btn-no-border sidebar-menu-search-button',
            html: $('<i>', { class: 'fa fa-search' })
        }));
        
        var $searchInputGroup = $('<div>', { class: 'input-group input-group-no-separation' });
        $searchInputGroup.append($('<input>', {
            class: 'form-control sidebar-menu-search',
            attr: {
                id: data.sidebarSearchInputId,
                placeholder: 'Search...',
                type: 'text'
            }
        }));
        $searchInputGroup.append($('<span>', {
            attr: {
                id: data.sidebarSearchClearButtonId
            },
            class: 'input-group-addon cursor-pointer sidebar-menu-search-clear-button',
            html: $('<i>', { class: 'fa fa-times' })
        }));
        $searchItem.append($searchInputGroup);

        var noResultsItemData = {
            'title': data.noResultsMessage,
            'href': 'javascript:void(0)',
            'icon': 'fa-times'
        };
        noResultsItemData = initMenuItemData(noResultsItemData);
        var $noResultsItem = $('<li>', {
                class: 'menu-item sidebar-menu-item-no-results',
                attr: {
                    id: 'sidebar_menu_item_no_results',
                    style: 'display: none;'
                }
            });
        addMenuItemLink($noResultsItem, noResultsItemData);
        $noResultsItem.append(createMenuItemDataContainer(noResultsItemData));
        
        $sidebarInner.append($searchItem);
        $sidebarInner.append($noResultsItem);
    }

    for (var i in data.menuItems) {
        var menuItemId = getMenuItemId(data.menuItems[i], menuItemsIdCount);
        
        sidebarMenuNodes[menuItemId] = data.menuItems[i];
        sidebarMenuNodes[menuItemId].id = menuItemId;
        sidebarMenuNodes[menuItemId].parent = null;

        var menuItemData = initMenuItemData(data.menuItems[i]),
            $newMenuItem = $('<li>', {
                class: 'menu-item',
                attr: {
                    id: menuItemId
                }
            });

        addMenuItemLink($newMenuItem, menuItemData);

        var $menuItemDataContainer = createMenuItemDataContainer(menuItemData);
        if (menuItemData.children) {
            sidebarMenuNodes[menuItemId].children = [];
            $newMenuItem.addClass('menu-item-has-children');
            addMenuItemChildrenToDataContainer(menuItemId, $menuItemDataContainer, menuItemData.children);
        }
        $newMenuItem.append($menuItemDataContainer);

        $sidebarInner.append($newMenuItem);
    }

    $sidebarContainer.find('.sidebar-outer').eq(0).append($sidebarInner);

    $sidebarContainer.addClass('sidebar');
    if (data.fixed == 'fixed') {
        $sidebarContainer.addClass('sidebar-fixed');
    }

    if (data.withExpandCollapseButton && data.withExpandCollapseButton === true) {
        var $sidebarControl = $('<div>', {
            class: 'sidebar-control',
            html: $('<div>', {
                class: 'sidebar-toggle',
                html: $('<button>', {
                    id: 'toggle-sidebar-size-btn',
                    class: 'btn btn-default btn-sm',
                    attr: {
                        type: 'button'
                    },
                    html: $('<i>', {
                        class: 'menu-icon fa fa-arrow-left'
                    })
                })
            })
        })
    
        $sidebarContainer.append($sidebarControl);
    }

    initScrollbarForSidebar();
    
    if (data.withSearch && data.withSearch === true) {
        addSearchEvent();
    }

    $('body').unblockControl({ focusElement: $sidebarContainer });

    return sidebarMenuNodes;
}

function initScrollbarForSidebar() {
    $('#sidebar .sidebar-outer').customScrollbar({
        skin: 'default-skin',
        hScroll: false,
        updateOnWindowResize: true
    });
}

function updateScrollbar() {
    $('#sidebar .sidebar-outer').customScrollbar('resize', true);
    $(window).resize();
}

function newScrollbarHeight($sidebarInner, $menuItem) {
    var rowHeight = $('.sidebar-inner > .menu-item:first-of-type').outerHeight();
    return Math.max(
        ((rowHeight * ($sidebarInner.find(' > .menu-item').index($menuItem) + 1)) + $menuItem.find('.sidebar-submenu').outerHeight()),
        $sidebarInner.height()
    );
}

function updateSidebarHeight() {
    var $sidebarInner = $('#sidebar .sidebar-inner');

    $sidebarInner.css('height', '');
    $sidebarInner = $('#sidebar .sidebar-inner');
    var $firstActiveMenuItem = $('#sidebar .menu-item.active').eq(0);
    var newHeight = newScrollbarHeight($sidebarInner, $firstActiveMenuItem);

    $sidebarInner.height(newHeight);
}

function updateSidebarHeightByMenuItem($menuItem) {
    var $sidebarInner = $('#sidebar .sidebar-inner');

    if ($menuItem.parent().hasClass('sidebar-inner')) {
        $sidebarInner.css('height', '');

        if ($menuItem.hasClass('active')) {
            var newHeight = newScrollbarHeight($sidebarInner, $menuItem);
            $sidebarInner.height(newHeight);
        }
    } else {
        if ($menuItem.hasClass('active')) {
            $sidebarInner.height($sidebarInner.height() + $menuItem.find('.sidebar-submenu').outerHeight());
        } else {
            $sidebarInner.height($sidebarInner.height() - $menuItem.find('.sidebar-submenu').outerHeight());
        }
    }
}

function staticNavigation(path) {
    path = (typeof path === 'undefined') ? window.location.pathname + window.location.hash : path;

    $('#sidebar .menu-item').removeClass('active');

    $('#sidebar .menu-item > a').each(function () {
        var href = $(this).attr('href');
        if (href == '#') {
            href = $(this).attr('data-href');
        }
        if (path === href) {
            $(this).parents('.menu-item-has-children').addClass('active');
            $(this).closest('.menu-item').addClass('active');
        }
    });

    $(window).resize();
}

function initSidebarEvents() {
    /**
     * Jquery objects for sidebar
     * @type {*|HTMLElement}
     */
    var $toggleNavBtn = $('#toggle-nav-btn');
    var $sidebar = $('#sidebar');
    var $toggleSidebarBtn = $('#toggle-sidebar-btn');
    var $document = $(document);
    /**
     * CSS Classes that trigger the submenu collapse
     * @type {string}
     */
    var menuItemHasChildrenCssClass = '.menu-item-has-children';

    const SCREEN_XS_MAX = 767;

    /**
     * Sidebar elements
     * @event click
     */
    $sidebar.on('click', '.menu-item a', function (e) {
        if ($(this).attr('href') == '#') {
            e.preventDefault();
        }
        var element = $($(this).parents('.menu-item')[0]);

        $sidebar.find('.menu-item').not('.menu-item-has-children').removeClass('active');
        if (element.hasClass('active')) {
            element.removeClass('active');
            element.find(menuItemHasChildrenCssClass).removeClass('active');
        }
        else {
            element.parent().find(menuItemHasChildrenCssClass).removeClass('active');
            element.addClass('active');
        }
    });
    /**
     * Collapse sidebar using the dedicated button from the bottom (Only on desktop/tablet)
     * @event click
     */
    $sidebar.on('click', '#toggle-sidebar-size-btn', function (e) {
        e.preventDefault();
        var $sidebarInner = $('#sidebar .sidebar-inner');

        $(this).find('.menu-icon').toggleClass('fa-arrow-right fa-arrow-left');
        if($sidebar.hasClass('sidebar-min')) {
            $sidebar.removeClass('sidebar-min');
            $(window).trigger('maximize.photon.sidebar');
            setCookie('sidebarStatus', 'open');

            $sidebarInner.css('height', '');
        } else {
            $sidebar.addClass('sidebar-min');
            $(window).trigger('minimize.photon.sidebar');
            setCookie('sidebarStatus', 'close');

            updateSidebarHeight();
        }
        updateScrollbar();
        $(window).resize();
        realignNotifications();
    });
    /**
     * Open/Close sidebar by using the "#toggle-sidebar-btn" button from the main navigation (Only on mobile)
     * @event click
     */
    $document.on('click', '#toggle-sidebar-btn', function (e) {
        e.preventDefault();
        $(this).toggleClass('btn-primary');

        if($sidebar.hasClass('open')) {
            $sidebar.removeClass('open');
            $(window).trigger('close.photon.sidebar');
        } else {
            $sidebar.addClass('open');
            $(window).trigger('open.photon.sidebar');
        }

        if($toggleNavBtn.hasClass('btn-primary')) {
            $toggleNavBtn.toggleClass('btn-primary');
            $toggleNavBtn.find('i.fa').toggleClass('fa-chevron-down fa-chevron-up');
        }
        $('#main-nav').collapse('hide');
    });
    /**
     * Close sidebar on mobile when click out of sidebar
     * @event click
     */
    $document.on('click', function (e) {
        if (!$(e.target).closest('#sidebar, #toggle-sidebar-btn').length) {
            $sidebar.removeClass('open');
            if($toggleSidebarBtn.hasClass('btn-primary')){
                $toggleSidebarBtn.removeClass('btn-primary');
            }
        }
    });

    /** Function to toggle the navbar minimization */
    $(document).on('click', '#toggle-nav-btn', function (e) {
        e.preventDefault();
        $(this).toggleClass('btn-primary');
        $(this).find('i.fa').toggleClass('fa-chevron-down fa-chevron-up');
    });

    $(document).on('click', '.menu-item > a, .menu-item > .menu-item-data > a', function (e) {
        if ($('#sidebar').hasClass('sidebar-min')) {
            var $menuItem = $(this).parents('.menu-item').eq(0);
            updateSidebarHeightByMenuItem($menuItem);
        }

        updateScrollbar();
    });

    $(function () {
        var sidebarStatus = getCookie('sidebarStatus');

        if (sidebarStatus == '') {
            setCookie('sidebarStatus', 'open');
        } else {
            if (sidebarStatus == 'close' && window.innerWidth > SCREEN_XS_MAX) {
                $sidebar.addClass('sidebar-min');
                $sidebar.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-left').addClass('fa-arrow-right');
            }
        }
    });

    $(window).on('resize', function () {
        var sidebarStatus = getCookie('sidebarStatus');
        var $sidebarInner = $('#sidebar .sidebar-inner');

        if (sidebarStatus == 'close' && window.innerWidth > SCREEN_XS_MAX) {
            $sidebar.addClass('sidebar-min');
            $sidebar.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-left').addClass('fa-arrow-right');
            updateSidebarHeight();
        } else {
            $sidebar.removeClass('sidebar-min');
            $sidebar.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-right').addClass('fa-arrow-left');
            $sidebarInner.css('height', '');
        }
    })
}

jQuery(function($) {
    initScrollbarForSidebar();
    initSidebarEvents();
});
