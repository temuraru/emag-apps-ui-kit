function initPhotonStick(container) {

    var $container = $(container || 'body');

    var stickSelector = ".stick";
    var $stickElements = $container.find(stickSelector);

    var offsetTop = $('.navbar-fixed-top').outerHeight();

    var MIN_EXTRA_HEIGHT_TO_ADD_FOR_WORKING_OK_STIKY_ELEMENT = 3;
    var BORDER_BOTTOM = 1;

    resetStickElementsToDefault($stickElements);

    $.each($stickElements, function () {
        var $this = $(this);
        var parents = $this.parents();
        var isHidden = false;

        $.each(parents, function() {
            if($(this).css('display') == 'none'){
                isHidden = true;
                return;
            }
        });

        if(!isHidden){
            $this.parent().css({'min-height': calculateMinHeightOfElement($this)});
            var $siblingsAndChildren = $this.parent().find(stickSelector);

            $siblingsAndChildren.each(function () {
                setPositionTop(this, $this);
            });

            $($siblingsAndChildren.get().reverse()).each(function (index) {
                setMinPosibleIndex(this, index);
            });

            addOffsetTopValue(this);
        }
    });

    setMaxIndexToAllElementSticked();

    $(document.body).off('click', '.stick-with-no-parent');
    $(document.body).on('click', '.stick-with-no-parent', function () {
        setMaxIndexToChildren(this);
    });

    $(window).off('scroll', setMaxIndexToAllElementSticked);
    $(window).on('scroll', setMaxIndexToAllElementSticked);

    function setMaxIndexToAllElementSticked() {
        $('.stick-with-no-parent').each(function () {
            setMaxIndexToChildren(this);
        });
    }

    function calculateMinHeightOfElement($this){
        return $this.outerHeight() + MIN_EXTRA_HEIGHT_TO_ADD_FOR_WORKING_OK_STIKY_ELEMENT;
    }

    function setMaxIndexToChildren(stickyContainer) {
        var highestIndex = getMaxIndexOfChildren(stickyContainer)
        $(stickyContainer).find(stickSelector).each(function () {
            var minPosibleIndex = this.minPosibleIndex;
            $(this).css({'z-index': minPosibleIndex + highestIndex});
        });
    }

    function getMaxIndexOfChildren(stickyContainer) {
        var highestIndex = 0;
        $(stickyContainer).find('input, div, select, ul').not(stickSelector).each(function () {
            var currentIndex = parseInt($(this).css("zIndex"), 10);
            if (currentIndex > highestIndex) {
                highestIndex = currentIndex;
            }
        });
        return highestIndex;
    }

    function addOffsetTopValue(stickElement) {
        $stickElement = $(stickElement);

        if (stickElement.posTop) {
            $stickElement.stick_in_parent({'offset_top': offsetTop + stickElement.posTop});
        } else {
            //has no parent
            $stickElement.parent().addClass('stick-with-no-parent');
            $stickElement.stick_in_parent({'offset_top': offsetTop});
        }
    }

    function setMinPosibleIndex(siblingAndChildren, index) {
        var minPosibleIndex = index + 1;
        siblingAndChildren.minPosibleIndex = minPosibleIndex;
    }

    function setPositionTop(siblingAndChildren, $stickElement) {
        //if is not current obj
        if (!$(siblingAndChildren).is($stickElement)) {
            if (siblingAndChildren.posTop) {
                siblingAndChildren.posTop += $stickElement.outerHeight() - BORDER_BOTTOM;
            } else {
                siblingAndChildren.posTop = $stickElement.outerHeight() - BORDER_BOTTOM;
            }
        }
    }

    function resetStickElementsToDefault($stickElements){
        $.each($stickElements, function() {
            this.posTop = null;
            this.minPosibleIndex = null;
            $(this).trigger("sticky_kit:recalc");
            $(this).trigger("sticky_kit:detach");
        })
    }
}

$(document.body).on('click', '#toggle-sidebar-size-btn', function () {
    setTimeout(function () {
        $(window).resize();
    }, 50);
}).on('hidden.bs.collapse hidden.bs.tab', function () {
        $(window).scroll();
});