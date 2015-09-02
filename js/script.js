$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
	// menu
	$('.js-menu').click(function(){
		var act = $(this).attr('data-action');
		switch(act){
			case 'open':
				$('.page-aside').addClass('open');
				$('.js-menu').attr('data-action', 'close');
			break;
			case 'close':
			default:
				$('.page-aside').removeClass('open');
				$('.js-menu').attr('data-action', 'open');
		}
	});
	
	// accordeon
	$('.accordeon-header').click(function(){
		$(this).parents('.accordeon').toggleClass('open');
		$(this).parents('.accordeon').find('.accordeon-content').slideToggle();
	});
	
	// jcarousel
	// http://sorgalla.com/jcarousel/docs/
	$('.carousel').jcarousel({
		list: '.carousel-inner',
		wrap: 'circular'
	});
	
	$('.carousel-pagination')
		.jcarouselPagination({
			item: function(page){
				return '<li class="nav-item"><a class="nav-link" href="#'+page+'"></a></li>';
			}
		})
		.on('jcarouselpagination:active', 'a', function(){ // - вот эта херня не работает почему-то
			$(this).addClass('active');
		})
		.on('jcarouselpagination:inactive', 'a', function(){ // - и эта (а должна!)
			$(this).removeClass('active');
		});
	
	$('.carousel-controlls .prev')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl({
			target: '-=1'
		});
	$('.carousel-controlls .next')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl({
			target: '+=1'
		});
		
});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}