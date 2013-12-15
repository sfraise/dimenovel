<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Dime Novel - An online marketplace for indipendent comic book artists and writers." />
    <title>Dime Novel</title>
    <meta property="og:image" content="http://www.dimenovelcomics.com/images/facebook-thumb-preview.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="627" />
    <link rel="icon" href="images/read-free-comics.gif" type="image/gif" />
    <link rel="image_src" href="images/facebook-thumb-preview.jpg" / >

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/dime-novel.css" />
    <link rel="stylesheet" type="text/css" href="css/colorbox.css" />

    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="js/colorbox/triggers.js"></script>
    <script type="text/javascript" src="js/turn.min.js"></script>
    <script type="text/javascript" src="js/dime-novel-main.js"></script>
    <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46121726-1', 'dimenovelcomics.com');
        ga('send', 'pageview');

    </script>
</head>

<body>
<?php
// REQUIRE THE INIT FILE
require 'core/init.php';
// INSTANTIATE THE USER CLASS
$user = new User();
// CHECK IF SESSION EXISTS
if(Session::exists('home')) {
	echo '<p>', Session::flash('home'), '</p>';
}
?>
<div class='topbar'>
    <?php
    // INCLUDE THE TOP BAR WITH USER INFO
    include_once 'views/topbar.php';
    ?>
</div>
<div class="mainbody">
    <?php
    // INCLUDE THE MAIN VIEW
    include_once 'views/main.php';
    ?>
</div>
</body>
</html>