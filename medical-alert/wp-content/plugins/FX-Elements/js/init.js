jQuery(document).ready(function($) {

	// Frame
	$('.migfx-elements-frame-align-center, .migfx-elements-frame-align-none').each(function() {
		var frame_width = $(this).find('img').width();
		$(this).css('width', frame_width + 12);
	});

	// Spoiler
	$('.migfx-elements-spoiler .migfx-elements-spoiler-title').click(function() {

		var // Spoiler elements
		spoiler = $(this).parent('.migfx-elements-spoiler').filter(':first'),
		title = spoiler.children('.migfx-elements-spoiler-title'),
		content = spoiler.children('.migfx-elements-spoiler-content'),
		isAccordion = ( spoiler.parent('.migfx-elements-accordion').length > 0 ) ? true : false;

		if ( spoiler.hasClass('migfx-elements-spoiler-open') ) {
			if ( !isAccordion ) {
				content.hide(200);
				spoiler.removeClass('migfx-elements-spoiler-open');
			}
		}
		else {
			spoiler.parent('.migfx-elements-accordion').children('.migfx-elements-spoiler').removeClass('migfx-elements-spoiler-open');
			spoiler.parent('.migfx-elements-accordion').find('.migfx-elements-spoiler-content').hide(200);
			content.show(100);
			spoiler.addClass('migfx-elements-spoiler-open');
		}
	});

	// Tabs
	$('.migfx-elements-tabs-nav').delegate('span:not(.migfx-elements-tabs-current)', 'click', function() {
		$(this).addClass('migfx-elements-tabs-current').siblings().removeClass('migfx-elements-tabs-current')
		.parents('.migfx-elements-tabs').find('.migfx-elements-tabs-pane').hide().eq($(this).index()).show();
	});
	$('.migfx-elements-tabs-pane').hide();
	$('.migfx-elements-tabs-nav span:first-child').addClass('migfx-elements-tabs-current');
	$('.migfx-elements-tabs-panes .migfx-elements-tabs-pane:first-child').show();

	// Tables
	$('.migfx-elements-table tr:even').addClass('migfx-elements-even');

});

function mycarousel_initCallback(carousel) {

	// Disable autoscrolling if the user clicks the prev or next button.
	carousel.buttonNext.bind('click', function() {
		carousel.startAuto(0);
	});

	carousel.buttonPrev.bind('click', function() {
		carousel.startAuto(0);
	});

	// Pause autoscrolling if the user moves with the cursor over the clip.
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
}