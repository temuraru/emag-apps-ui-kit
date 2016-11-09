$(document).ready(function() {  
	
	$('.red-line').addClass('animate-line');
      
    $('#fullpage').fullpage({
        anchors: ['home_page', 'about_page'],
        css3: true,
        onLeave: function(index, nextIndex, direction){
            if(nextIndex == 2){
                $('.logo').addClass('logo-small');
                $('.menu-top').addClass('menu-top-show');
            }else{
                 $('.logo').removeClass('logo-small');
                 $('.menu-top').removeClass('menu-top-show');
            }
            positionContent();
        },
        afterRender: positionContent
    });

    $(window).on('resize', positionContent);

    function positionContent(){
        var $window = $(window);
        var windowHeight = $window.height();
        var currentIndex = $(document.body).find('.section.active').index();
        var $currentContent = $('.content').eq(currentIndex);
        var contentHeight = $currentContent.height();
		
		$currentContent.css({'margin-top':(windowHeight-contentHeight)/2})
    }
	$(window).on('orientationchange', function () {
		setTimeout(function(){
			positionContent();
		},0)
	})
});
