<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:image" content="http://www.dimenovelcomics.com/images/facebook-thumb-preview.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="627" />
<link rel="icon" href="images/read-free-comics.gif" type="image/gif" />
<link rel="image_src" href="images/facebook-thumb-preview.jpg" / >
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script><script type="text/javascript" src="js/turn.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/dime-novel.css" >
<meta name="description" content="Dime Novel - An online marketplace for independent comic book artists and writers." />
<title>Jeminar - Ch. 1 - Dime Novel</title>

</head>

<body>
<!--comic-->
<div id="comic-container">
	<div style="background-image:url(pages/20130809-184454.jpg);"></div>
	<div style="background-image:url(pages/20130809-184556.jpg);"></div>
	<div style="background-image:url(pages/20130809-184615.jpg);"></div>
	<div style="background-image:url(pages/shipmates-16.jpg);"></div>
	<div style="background-image:url(pages/shipmates-17.jpg);"></div>
	<div style="background-image:url(pages/shipmates-18.jpg);"></div>
	<div style="background-image:url(pages/shipmates-19.jpg);"></div>
</div>

<script type="text/javascript">

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

</script>

</body>
</html>