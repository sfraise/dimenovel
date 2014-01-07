<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<?php
include_once 'views/head.php';
?>
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