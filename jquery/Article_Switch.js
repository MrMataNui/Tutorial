$(function(){
	$('article').each(function(){
		$(this).hide();
		$(this).prev().hide();
	});
	$('article:first').each(function() {
		$(this).show();
		$(this).prev().show();
	});
	$('div.sidenav_left a').click(function(){
		var this_link = $(this).attr('href');
		$('article').each(function(){
			if(('#'+$(this).prev().attr('id'))==this_link){
				$(this).show();
				$(this).prev().show();
			} else {
				$(this).hide();
				$(this).prev().hide();
			}
		});
	});
});