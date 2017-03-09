(function($){
	
	$(document).ready(function (){
		
		var select_picker = $('.selectpicker').find('select');
		
		if (select_picker) {
			var placeholder = $(select_picker).find('option.gf_placeholder');
			$(placeholder).attr('data-hidden', 'true');
		}
		
		$('.selectpicker').find('select').selectpicker({
			'style': 'btn btn-group btn-default', 
			'width': '98%'
		});
	
		$('body').on('click','#section-links > a', function(e){
		
		var section_id = $(this).attr('href');
		var scroll_to = $(section_id).offset().top - 30;
		
		$('html, body').animate({scrollTop: scroll_to}, 500);
				
		return false;
		
		});
		
		$('body').on('click','.hp-section > button.scroll-btn', function(e){
			
		var scroll_to = $(this).parent().next().offset().top - 30;	
		
		$('html, body').animate({scrollTop: scroll_to}, 500);
						
		return false;
		
		});
		
		//GO TO PAGE TOP
		$('body').on('click','button#back2top', function(e){
	
		$('html, body').animate({ scrollTop: 0 }, 500);

		return false;
		
		});
	
	});
	
	$(window).on("resize", function(e){

	});
	
	$(window).load(function(e){
	
	});
	
	$(window).scroll(function(e){
		var scroll = $(window).scrollTop();
		var page_top = $('#hp-top').outerHeight();
		var h = $(window).height();
	
		if ( scroll > Math.ceil(page_top/2) && $('button#back2top').hasClass('hidden')) {
		$('button#back2top').removeClass('hidden').addClass('fadeIn');
		console.log(scroll);	
			
			$('button#back2top').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
			$('button#back2top').removeClass('fadeIn').addClass('visible');	
		
			});
		}
		
		if ( scroll <= Math.ceil(page_top/2) && $('button#back2top').hasClass('visible') ) {
		console.log(scroll);
		
		$('button#back2top').removeClass('visible').addClass('fadeOut');	
		
			$('button#back2top').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
			$('button#back2top').removeClass('fadeOut').addClass('hidden');	
		
			});
			
		}
	
	});
	
	
})(window.jQuery);