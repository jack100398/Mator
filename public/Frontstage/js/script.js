/*global $,document,window */

$(document).ready(function () {

	// slider
	$('.banner').flexslider({
		animation: "slide",
		directionNav: true,
		controlNav: true,
		animationLoop: false,
		pauseOnAction: false,
		slideshowSpeed: 5000,
		touch: $('.flexslider li').length > 1,
		after: function(slider){ 
			slider.pause(); 
			slider.play(); 
		}
	});
	

	$('#language').click(function(){
		var $this = $(this);

		if($this.hasClass('active')){
			$this.removeClass('active')
		}else{
			$this.addClass('active');
		}
		return false;
	});

	$('#language-content').find('a').click(function(){
		var $this = $(this);
		var _language = $this.find('span').text();

		$this.addClass('current').parent('li')
		.siblings('li').find('a').removeClass('current');
		$('#selected-language').text(_language);
	});

	$('#search').click(function(){
		var $this = $(this);
		$('#search-content').addClass('active');
		return false;
	});

	$('#search-close').click(function(){
		var $this = $(this);
		$('#search-content').removeClass('active');
		return false;
	});

	$("#goTop").click(function(){
		$("html,body").animate({scrollTop:0},600);
		return false;
	});
	
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if(scrollTop>800){
			$('#goTop').show();
		}else{
			$('#goTop').hide();
		}
	}).scroll();

	$('#menu-btn').click(function(){
		$('#mobile-menu-wrap').slideToggle();
	});

	$('#language2').click(function(){
		var $this = $(this);

		if($this.hasClass('active')){
			$this.removeClass('active')
		}else{
			$this.addClass('active');
		}
		return false;
	});

	$('#language-content2').find('a').click(function(){
		var $this = $(this);

		$this.addClass('current').parent('li')
		.siblings('li').find('a').removeClass('current');
	});

});
