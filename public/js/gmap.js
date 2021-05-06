$(document).ready(function() {
	$('.ndmotkhoi').slideUp();
	$('.motkhoi p').click(function(event) {
		/* Act on the event */
		$(this).next('.ndmotkhoi').slideToggle();
		$(this).toggleClass('xanh')
	});
});