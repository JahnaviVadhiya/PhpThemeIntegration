<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Theme Integration Demo</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
            <h2 class="title"><a href="#">Welcome to Dr Subhash University </a></h2>
				<p class="meta"><span class="date">June 29, 2022</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                <p>We heartily welcome you to <strong>Dr Subhash University</strong></p>
               <p> We shall always endeavor to make your time spent in the campus comfortable,
                 enjoyable and fruitful. Whatever may be the purpose and duration of your visit
                  to our campus we want you to go back richer in some way-in knowledge,
                   experience, or social perspective.</p>
					
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
