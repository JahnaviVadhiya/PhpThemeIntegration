<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Theme Integration Demo</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
	
.contact_form{
	margin-left:200px;
}
.contact_form textarea{
 margin-bottom: 1px;
 width: 100%;
 background: transparent;
 color: #363636;
 font-size: 18px;
 font-weight:bold;
 padding-top:5px;
 height: 50px;
 border-bottom: #003471 solid 1px !important;
 border: inherit;
}
.contact_form input{
 margin-bottom: 1px;
 width: 100%;
 background: transparent;
 color: #363636;
 font-size: 15px;
 font-weight: bold;
 padding-top:5px;
 height:30px;
 border-bottom: #003471 solid 1px !important;
 border: inherit;
}

.contact_form .send_btn {
 
 transition: ease-in all 0.5s;
 background-color: #f2db18;
 text-transform: uppercase;
 color: #fffefe;
 border-radius:15px;
 display: block;
 margin-top:20px;

}

.contact_form .send_btn:hover {
 background-color: #092352;
 transition: ease-in all 0.5s;
 color: #fff;
}

#post_form *::placeholder {
 color: #363636;
 opacity: 1;
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
				<h2 class="title"><a href="#">Contact Us </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<form id="post_form" class="contact_form">
                        <table>
                         <tr><td><input type="text" name="name" placeholder="Name"></td></tr>
                         <tr><td> <input type="email" name="email" placeholder="Email"></td></tr>
                         <tr><td><input type="text" name="phone" placeholder="Number"></td></tr>
						 <tr><td><textarea cols="21" rows="5" placeholder="Message">MESSAGE</textarea></td></tr>
						 <tr><td><input class="send_btn" type="submit" value="Submit" name="submit">
                         
                        </table>
                    </form>
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
