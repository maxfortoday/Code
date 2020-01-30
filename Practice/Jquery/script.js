// script,js

// blur & keydown
$(function() {
	$('input').blur(function(){
		if( $(this).val() == "" ) {
			$(this).css('border','solid 1px red');
			$('#box').text('Forgot to add text?');
		}
	});

	$('input').keydown(function(){
		if ( $(this).val !== "" ) {
			$(this).css('border','silid 5px #777');
			$('#box').text('Thanks for that!');
		}
	});

	// hover fonction
	$('#box').hover(function(){
		$(this).text('You hovered in!');
	}, function() {
		$(this).text('You hovered out!');
	});

	// multible selection 
	$('.notification-bar').delay(2000).slideDown().delay(3000).fadeOut();
	
	// click function
	$('#box1').click(function(){
		$(this).fadeTo( 1000, 0.25, function(){
			$(this).text('You push the box').css('font-size', '40px');
			$('#box2').slideUp(2000);
			$('#box3').slideUp(4000);
			$('#box4').slideUp(8000);
		});
	});

	$('#button1').click(function(){
		$('#box4').slideToggle();
	});

	$('#button').click(function(){
		$('#box').fadeOut(1000);
	});

	$('#box').click(function(){
		alert('you just click the box');
	});

	// animations
	$('#left').click(function(){
		$('.box5').animate({
				left: "-=40px",
				fontSize: "+=2px"
			}, function(){

		});
	});
	$('#right').click(function(){
		$('.box5').animate({
				left: "+=40px",
				fontSize: "-=2px"
			}, function(){

		});
	});
	$('#up').click(function(){
		$('.box5').animate({
				top: "-=40px",
				opacity: "+=0.1"
			}, function(){

		});
	});
	$('#down').click(function(){
		$('.box5').animate({
				top: "+=40px",
				opacity: "-=0.1"
			}, function(){

		});
	});

	

	// jquery CSS	

	$('#circle2').css({
		"display": "inline-block",
		"background": "#8a8d22",
		"color": "white",
		"text-align": "center",
		"line-height": "140px",
		"height": "140px",
		"width": "140px",
		"margin": "40px"
	}).addClass('circleShape');


	// $('h2,h3,h4').css('border', 'solid 1px red');

	// $('div#container').css('border', 'solid 1px red');

	// $('p.lead').css('border', 'solid 1px red');

	// $('li:first').css('border', 'solid 1px red');

	// $('li:last').css('border', 'solid 1px red');

	//$('p:even').css('border', 'solid 1px red');	

	// $('p:odd').css('border', 'solid 1px red');	

	// $('div em').css('border', 'solid 1px red');

	// $('div > p').css('border', 'solid 1px red');	

	// $(':header').css('border', 'solid 1px red');	

	// $(':contains("max")').css('border', 'solid 1px red');	

	// $('div:contains("max")').css('border', 'solid 1px red');	

	// show / hide

	// $('div.hidden').show();

	// $('h3').hide();

	// fade in / fade out 
	// $('p').fadeOut();

	// $('div.hidden').fadeIn(8000);

}); 