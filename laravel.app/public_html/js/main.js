$(document).ready(function(){
	$('ul').has('li.active').show();

	$('ul.sidebar li ul li').on('click',function(e){
		e.stopPropagation();
	});

	$('ul.sidebar>li').on('click',function(e){
		$('.sidebar li ul').each( function(index, element){
			if($(element).has('li.active').length === 0){
				$(element).hide(400);
			};
		})
		$(this).find('ul').show(400);
	});

	$(document).on('click',function(e){
		if($('.sidebar').has(e.target).length === 0 && e.target){
			$('.sidebar li ul').each( function(index, element){
				if($(element).has('li.active').length === 0){
					$(element).hide(400);
				};
			})
		}
	});
});