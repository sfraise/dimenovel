

jQuery(document).ready(function() {
	
	$("#step-two").hide();
	$("#step-three").hide();
	$("#step-four").hide();
	$("#step-five").hide();
	$("#step-six").hide();
	$("#dialogue-one").hide();
	$("#dialogue-two").hide();
	$("#dialogue-three").hide();
	$("#dialogue-four").hide();
	$("#dialogue-five").hide();
	$("#dialogue-six").hide();
	$("#dialogue-seven").hide();
	$("#dialogue-eight").hide();
	$("#dialogue-nine").hide();
	$("#dialogue-ten").hide();
	$("#dialogue-eleven").hide();
	$("#dialogue-twelve").hide();
	$("#dialogue-thirteen").hide();
	$("#dialogue-fourteen").hide();
	$("#dialogue-fifteen").hide();
	$("#dialogue-sixteen").hide();
	$("#dialogue-seventeen").hide();
	$("#dialogue-eighteen").hide();
	$("#dialogue-nineteen").hide();
	$("#dialogue-twenty").hide();
	$("#dialogue-twenty-one").hide();
	$("#dialogue-twenty-two").hide();
	$("#dialogue-twenty-three").hide();
	$("#comic-container").hide();	
	
	$("#step-one-start").click(function () {
		$("#step-two").toggle(1000);
		$("#step-one").hide(1000);
	});

	$("#step-two").click(function () {
		$("#step-three").toggle(1000);
		$("#step-two").hide(1000);
	});
	
	$("#step-three").click(function () {
		$("#step-four").toggle(1000);
		$("#step-three").hide(1000);
	});
	
	$("#step-four").click(function () {
		$("#step-five").toggle(1000);
		$("#step-four").hide(1000);	
	});
	
	$("#step-five").click(function () {
		$("#step-six").toggle(1000);
		$("#step-five").hide(1000);	
	});
	
	$("#step-six").click(function () {
		$("#dialogue-one").toggle(1000)
	});
	
	$("#dialogue-one").click(function () {
		$("#dialogue-two").toggle(1000);
		$("#dialogue-one").hide(1000);	
	});
	
	$("#dialogue-two").click(function () {
		$("#dialogue-three").toggle(1000);
		$("#dialogue-two").hide(1000);	
	});
	
	$("#dialogue-three").click(function () {
		$("#dialogue-four").toggle(1000);
		$("#dialogue-three").hide(1000);	
	});
	
	$("#dialogue-four").click(function () {
		$("#dialogue-five").toggle(1000);
		$("#dialogue-four").hide(1000);	
	});
	
	$("#dialogue-five").click(function () {
		$("#dialogue-six").toggle(1000);
		$("#dialogue-five").hide(1000);	
	});
	
	$("#dialogue-six").click(function () {
		$("#dialogue-seven").toggle(1000);
		$("#dialogue-six").hide(1000);	
	});
	
	$("#dialogue-seven").click(function () {
		$("#dialogue-eight").toggle(1000);
		$("#dialogue-seven").hide(1000);	
	});
	
	$("#dialogue-eight").click(function () {
		$("#dialogue-nine").toggle(1000);
		$("#dialogue-eight").hide(1000);	
	});
	
	$("#dialogue-nine").click(function () {
		$("#dialogue-ten").toggle(1000);
		$("#dialogue-nine").hide(1000);	
	});
	
	$("#dialogue-ten").click(function () {
		$("#dialogue-eleven").toggle(1000);
		$("#dialogue-ten").hide(1000);	
	});
	
	$("#dialogue-eleven").click(function () {
		$("#dialogue-twelve").toggle(1000);
		$("#dialogue-eleven").hide(1000);
		$("#fade").hide(1000);
	});
	
	$("#dialogue-twelve").click(function () {
		$("#dialogue-thirteen").toggle(1000);
		$("#step-six").hide(1000);
		
		$("#dialogue-twelve").hide(1000);	
	});
	
	$("#dialogue-thirteen").click(function () {
		$("#dialogue-fourteen").toggle(1000);
		$("#dialogue-thirteen").hide(1000);	
	});
	
	$("#dialogue-fourteen").click(function () {
		$("#dialogue-fifteen").toggle(1000);
		$("#dialogue-fourteen").hide(1000);	
	});
	
	$("#dialogue-fifteen").click(function () {
		$("#dialogue-sixteen").toggle(1000);
		$("#dialogue-fifteen").hide(1000);	
	});
	
	$("#dialogue-sixteen").click(function () {
		$("#dialogue-seventeen").toggle(1000);
		$("#dialogue-sixteen").hide(1000);	
	});
	
	$("#dialogue-seventeen").click(function () {
		$("#dialogue-eighteen").toggle(1000);
		$("#dialogue-seventeen").hide(1000);	
	});
	
	$("#dialogue-eighteen").click(function () {
		$("#dialogue-nineteen").toggle(1000);
		$("#dialogue-eighteen").hide(1000);	
	});
	
	$("#dialogue-nineteen").click(function () {
		$("#dialogue-twenty").toggle(1000);
		$("#dialogue-nineteen").hide(1000);	
	});
	
	$("#dialogue-twenty").click(function () {
		$("#dialogue-twenty-one").toggle(1000);
		$("#dialogue-twenty").hide(1000);	
	});
	
	$("#dialogue-twenty-one").click(function () {
		$("#dialogue-twenty-two").toggle(1000);
		$("#dialogue-twenty-one").hide(1000);	
	});
	
	$("#dialogue-twenty-two").click(function () {
		$("#dialogue-twenty-three").toggle(1000);
		$("#dialogue-twenty-two").hide(1000);	
	});
	
	$("#dialogue-twenty-three").click(function () {
		$("#dialogue-").toggle(1000);
		$("#dialogue-twenty-three").hide(1000);	
	});
	
	$('img[usemap]').rwdImageMaps();
	
	
	$(window).ready(function() {
		$('#comic-container').turn({
							display: 'double',
							acceleration: true,
							gradients: !$.isTouch,
							elevation:50,
							when: {
								turned: function(e, page) {
									/*console.log('Current view: ', $(this).turn('view'));*/
								}
							}
						});
	});
	
	
	$(window).bind('keydown', function(e){
		
		if (e.keyCode==37)
			$('#comic-container').turn('previous');
		else if (e.keyCode==39)
			$('#comic-container').turn('next');
			
	});

});
