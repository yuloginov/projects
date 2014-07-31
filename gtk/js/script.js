$(function() {
	/* Parralax */
	
	$('.parralax .element').imageScroll({
		image: 'content/parralax.jpg',
		container: $('.parralax'),
		coverRatio: 0.38,
		speed: 0.0,
		forcedimageheight: 322
	});
	
	/* Select input */
	
	$('.select').selectmenu({
		change: function( event, data ) {
			$('.select option').attr('selected', false);
			$('.select :nth-child('+parseInt(data.item.index+1,10)+')').attr('selected', true);
		}
	});
	
	/* Links */
	
	$('a[href^="."]').click(function(){
		var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
        return false; 
	});
	
	$('.mkrequest2-button').click(function(){
		$('.select option').attr('selected', false);
		$('.select :nth-child('+parseInt($(this).attr('ref'),10)+')').attr('selected', true);
		$('.select').selectmenu('refresh');
	});
	
	/* Sliders */
	
	var block1slider_en = true;
	$('.block1slideritems').jCarouselLite({
		visible: 1,
		speed: 1000,
		circular: false,
		btnGo:
		['.block1slider #pag #el1','.block1slider #pag #el2','.block1slider #pag #el3'],
		afterEnd: function(){
			block1slider_en = true;
		}
	});
	
	$('.block1slider #pag li').click(function(){
		if (!block1slider_en) return;
		block1slider_en = false;
		$('.block1slider #pag .active').removeClass('active');
		$(this).addClass('active');
	});
	
	var block3slider_en = true;
	$('.block3slider-elements').jCarouselLite({
		visible: 1,
		speed: 1000,
		circular: false,
		btnGo:
		['.block3slider #pag #el1','.block3slider #pag #el2','.block3slider #pag #el3'],
		afterEnd: function(){
			block3slider_en = true;
		}
	});
	
	$('.block3slider #pag li').click(function(){
		if (!block3slider_en) return;
		block3slider_en = false;
		$('.block3slider #pag .active').removeClass('active');
		$(this).addClass('active');
	});
	
	/* WindowCloseButton */
	$('.closewindow').click(function(){
		$('.mailsended-bg, .mailsended').css('display','none');
	});
	
});