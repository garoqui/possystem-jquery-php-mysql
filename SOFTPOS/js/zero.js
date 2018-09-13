(function($){

/* On Window Load */
var setEqualHeight = function(){
	$('.category-box .one-third').height('auto').equalHeight();
};

$(window).load(function(){
	setEqualHeight();
});

$(window).resize(function(){
	setEqualHeight();
});

/* On Document Ready */
$(document).ready(function(){
	/* --- Jquery Sooperfish Menu --- */
	$('.navigation .menu')
		.addClass('sf-menu')
		.sooperfish({
			hoverClass : 'sf-hover',
			animationShow : {height:'show'},
			speedShow : 200,
			delay:500,
			animationHide : {height:'hide'},
			speedHide : 200,
			autoArrows : true,
			dualColumn: 1000,
			tripleColumn: 1000
		});

	
	
	/* --- jQuery Mobile Menu --- */
	$('.main-nav .sf-menu').mobileMenu();
	
	/* --- jQuery Mobile Menu --- */
	//$('.top-nav .topmenu.sf-menu').mobileMenu();

	/* Mobile nav collapse
	------------------------------------------------------------------- */
	/*$('.btn-navbar').click(function(e){
		e.preventDefault();
	  var $el = $(this),
	      $navCollapse = $el.next('.nav-collapse');

	  // If collapsed
	  if( $el.hasClass('collapsed') ) {
	    $navCollapse.height( $navCollapse.children().outerHeight(true) );
	    $el.removeClass('collapsed');
	  } else {
	    $navCollapse.height(0);
	    $el.addClass('collapsed');
	  }
	});*/
	// Mobile Nav
  // ---------- 
  $('#main-menu-slide').mmenu({
		isMenu: true,
    panelNodeType: "nav, div, ul, ol"
  }, {
		panelClass: 'menu-panel',
		listClass: 'mobile-menu'
  });

	/* --- Set Clear on footer widget --- */
	$('#footer .widget:nth-child(3n+4)').addClass('clearing');

	/* --- Back To Top Button --- */
	$('.back-to-top').click(function(e){
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, 700);
	});

	/* --- Timeline --- */
	(function(timeline){
		$.each(timeline, function(){
			var timelineEntry = $(this).find('.entry');
			timelineEntry.filter(':nth-child(2)').addClass('second')

			// Check if first entry is higher than second entry
			if( timelineEntry.eq(0).height() > timelineEntry.eq(1).height() + 40 ) {
				timelineEntry.filter(':nth-child(2), :nth-child(2n+3)').addClass('cr');
				timelineEntry.filter(':nth-child(2n+4)').addClass('cl');
			} else {
				timelineEntry.filter(':nth-child(2), :nth-child(2n+4)').addClass('cr');
				timelineEntry.filter(':nth-child(2n+3)').addClass('cl');
			}
		});
	})($('.timeline-section'));

});
})(jQuery);