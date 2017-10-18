console.log($(window).each(function(){console.log(this)}));
$(window).on('resizeBy', function(){
	console.log('x');
});
if ($(window).width() <= 768) {
	$('#menu').hide();
}
$('#menu__btn').on('click', function(){
	$('#menu').fadeToggle();
});
$('#menu__close').on('click', function(){
	$('#menu').hide();
});