

<!DOCTYPE html>
<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>.:: Image Hosting ::.</title>
	  
	  <!-- Link CSS -->
	  <link rel="stylesheet" href="assets/css/reset.css" type="text/css" media="screen" charset="utf-8"/>
	  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" charset="utf-8"/>
	  <link rel="stylesheet" href="assets/css/jquery-ui-1.8.21.custom.css">
	  <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
	  
	  <!-- End CSS -->
	  
	  <!-- Link JS -->
	  <script src="assets/js/jquery-1.8.2.min.js"></script>
	  <script src="assets/js/jquery-ui-1.8.21.custom.min.js"></script>
	  <script src="assets/js/jquery.fancybox.js"></script>
	  <script src="assets/js/jquery.fancybox.pack.js"></script>
	  <script src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
	  <script src="assets/js/check_url.js" type="text/javascript" charset="utf-8"></script>
	  
	  <script type="text/javascript" charset="utf-8">
		$(function() {
			$( ".upload" ).button();
			$('.fancybox').fancybox();
		});
	  </script>
	  <!-- End JS -->
	  
	</head>
	
	<body id="index" onload="">
	  <!-- Begin Form Upload Images -->
	  <div id="content">
	  	<form action="" method="post" enctype="multipart/form-data">
	  		<input class="upload_web" type="radio" name="upload_rad" checked="checked" onclick="url_check(0)" /><label onclick="focus_radio(0)">Web URL</label> <br />
	  		<input class="cls_web" type="text" name="upload_web" size="50" placeholder="www.example.com/images.jpg" /> <br />
	  		<input class="upload_browse" type="radio" name="upload_rad" onclick="url_check(1)" /><label onclick="focus_radio(1)">Browse URL</label> <br />
	  		<input class="cls_browse" type="file" accept="image/*" name="upload_browse" disabled="disabled" /> <br />
	  		<input class="upload" type="submit" name="upload_submit" value="UPLOAD" onclick="validate_upload();" />
	  	</form>
	  	<hr />
	  	<div id="list-menu" align="center">
		  	<span>Development By Noerone Xalyn</span>
	  	</div>
	  </div>
	  
	  <?php

	if(@$_POST['upload_submit'])
	{
		
		if((@$_POST['upload_web']=="") && (@$_FILES['upload_browse']['tmp_name']==""))
		{
			echo "";
		}
		else 
		{
			require_once ('lib/ih_upload_images.php');
			
		}
		
	}   
	
?>
	</body>
</html>