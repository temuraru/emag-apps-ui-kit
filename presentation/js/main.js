$(document).ready(function() {  
	
	$('.red-line').addClass('animate-line');
    
	var $window = $(window);
	var $container = $(".container");
	var $logo = $('.logo');
	var $homeSection = $('.home');
	var $aboutSection = $('.about');
	var $menuTop = $('.menu-top');
	
	setPageHeight();
	showMenu();
	
    $window.on('resize', function(){
		resetPage();
		setPageHeight();
	});
	
	$container.on('scroll', function(){
		showMenu();
	});
	
	function resetPage(){
		$container.scrollTop(0);
		$homeSection.css({'height':''});
		$aboutSection.css({'height':''});
		$menuTop.removeClass('menu-top-show');
	}
	
	function setPageHeight(){
		var windowHeight = $window.height();
		$homeSection.css({'height':''});
		$homeSection.height( Math.max( windowHeight - $('#header').height(), $homeSection.height() ) );
		var sectionHeight = Math.max($aboutSection.height()+$('#footer').height(), windowHeight);
		$aboutSection.height(sectionHeight);
	}
	
	$('.find-out').on('click', function(){
		$container.animate({ scrollTop: $homeSection.height()+$logo.height()}, 500,function(){
			$menuTop.addClass('menu-top-show ');
		});
	})
	
	$('.btn-home').on('click', function(){
	   $(this).blur();
		$menuTop.removeClass('menu-top-show ')
		$container.animate({ scrollTop: 0 }, 500, function(){	
		});	
	});
	
	function showMenu(){
		if($container.scrollTop() > $homeSection.height()){
			$menuTop.addClass('menu-top-show');
			$logo.addClass('logo-small');
		}else{
			$menuTop.removeClass('menu-top-show ');
			$logo.removeClass('logo-small');
		}
	}
});
