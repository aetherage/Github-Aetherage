
$(function() {
                        $("#slider > div:gt(0)").hide();
	
			setInterval(function() { 
			  $('#slider > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#slider');
			},  3000);
			
		});

$(function() {
                        $("#slider2 > div:gt(0)").hide();
	
			setInterval(function() { 
			  $('#slider2 > div:first')
			    .fadeOut(2000)
			    .next()
			    .fadeIn(2000)
			    .end()
			    .appendTo('#slider2');
			},  3000);
			
		});