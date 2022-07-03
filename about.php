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
				<h2 class="title"><a href="#">About Us </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					
                    <p>Dr. Subhash University which is an institutional Jewel of Junagadh was
                     founded by the industrialist, philanthropist, and a visionary Late <strong>
                    Shri Pethaljibhai N.Chavda</strong> and is dedicated to the memory of his late son 
                     <strong>Dr.Subhash P.Chavda</strong>. It is the flagship institution among the seventeen 
                     institutions managed by Dr. Subhash P. Chavda Ahir Kelavani Mandal,
                      Junagadh which is a trust.</p>
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
