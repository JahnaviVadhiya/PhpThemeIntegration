<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Theme Integration Demo</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
    .images{
        margin-top:20px;
    }
</style>
</head>
<body>
    <?php

        include './themepart/menu.php';
        include './themepart/logo.php';
    ?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="./images/clgimg.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
            <h2 class="title"><a href="#">Photos </a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                    
                    <div class="images">
					<img src="./images/clg1.jpg" width="30%" height="50%">
                    <img src="./images/clg2.jpeg" width="30%" height="50%">
                    <img src="./images/clg3.jpg" width="30%" height="50%">
                    <img src="./images/clg4.jpg" width="30%" height="50%">
                    <img src="./images/clg6.jpg" width="30%" height="50%">
                    <img src="./images/clg7.jpg" width="30%" height="50%">
                    <img src="./images/clg8.jpeg" width="30%" height="50%">
</div>
					<!--<p class="links"><a href="#">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></p>-->
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
            include './themepart/sidebar.php';
        ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
    <?php
        include './themepart/footer.php';
    ?>
<!-- end #footer -->
</body>
</html>
