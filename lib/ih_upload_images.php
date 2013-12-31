<?php
	
	require_once("ih_config.php");
	
	# Variable POST Upload Images
	
	$upload_web = trim(@$_POST['upload_web']);
	$upload_browse_name = @basename($_FILES['upload_browse']['name']);
	$upload_browse_type = @$_FILES['upload_browse']['type'];
	$upload_browse_size = @$_FILES['upload_browse']['size'];
	$upload_browse_tmp = @$_FILES['upload_browse']['tmp_name'];
	$upload_browse_error = @$_FILES['upload_browse']['error'];
	
	# ---------------------------
	
	# Validate Size
	

	# Random Folder
	$random = rand(1,99);
	$cek_folder = is_dir('storage_upload/'.$random);
	
	cek_folder($cek_folder, $random);
	
	if($upload_web == '' || $upload_web == null)
	{
		if(is_image($upload_browse_tmp))
		{
			proses_upload_browse($upload_browse_tmp,$upload_browse_name,$random);
		}
		else 
		{
			#echo "Sorry, your file not images / not support by system.";
			echo "<script>jQuery(document).ready(function() {
			    $.fancybox(
					'<div class=\"output\"><h2>Sorry, your file not images / not support by system.</h2><br /><table><tr><td>URL</td><td> : </td><td><input type=\"text\" name=\"url\" value=\"---\" size=50 /></td></tr><tr><td>Forum</td><td> : </td><td><input type=\"text\" name=\"url\" value=\"---\" size=50 /></td></tr><tr><td>Tag</td><td> : </td><td><input type=\"text\" name=\"url\" value=\"---\" size=50 /></td></tr></table></div>',
					{
			        	'autoDimensions'	: false,
						'width'         	: 550,
						'height'        	: 'auto',
						'transitionIn'		: 'none',
						'transitionOut'		: 'none'
					}
				);
			});</script>";
		}
	}
	else 
	{
		proses_upload_web($upload_web, $random);
		/*if(is_image($upload_web))
		{
			proses_upload_web($upload_web, $random);
		}
		else
		{
			echo "Sorry, your file not images / not support by system.";
		}*/
	}
	
	# Proses Upload dari Browse
	function proses_upload_browse($filetmp,$filename,$random)
	{
		$upload_browse = move_uploaded_file($filetmp, 'storage_upload/'.$random.'/'.$filename);
		
		if($upload_browse)
		{
			# berhasil
			$link = BASE_UPLOAD."$random/$filename";
			echo "<script>jQuery(document).ready(function() {
			    $.fancybox(
					'<div class=\"output\"><h2>Upload Images Successfull.</h2><br /><table><tr><td>URL</td><td> : </td><td><input type=\"text\" name=\"url\" value=\"{$link}\" size=50 /></td></tr><tr><td>Forum</td><td> : </td><td><input type=\"text\" name=\"url\" value=\"{$link}\" size=50 /></td></tr><tr><td>Tag</td><td> : </td><td><input type=\"text\" name=\"url\" value=\"{$link}\" size=50 /></td></tr></table></div>',
					{
			        	'autoDimensions'	: false,
						'width'         	: 550,
						'height'        	: 700,
						'transitionIn'		: 'none',
						'transitionOut'		: 'none'
					}
				);
			});</script>";
		}
		else 
		{
			# error
		}
	}
	
	# Proses Upload dari URL
	function proses_upload_web($upload_web,$random)
	{
		$link = explode('/', $upload_web);
		$name = array_reverse($link);
		# echo $name[0];
		$upload_url = @file_get_contents($upload_web);
		#$upload_images = move_uploaded_file($upload_url, 'storage_upload/'.$random.'/'.$name[0]);
		$upload_image = file_put_contents('storage_upload/'.$random.'/'.$name[0], $upload_url);
		if($upload_image)
		{
			echo "Berhasil";
		}
		else 
		{
			echo "Berhasil 2";	
		}
	}
	
	# Cek Folder Upload Images
	function cek_folder($data,$random)
	{
		if($data)
		{
			# Bila folder ada
			# echo 'storage_upload/'.$random;
		}
		else 
		{
			# Bila folder tidak ada
			mkdir('storage_upload/'.$random);
		}
	
	}


	function is_image($path)
	{
	    $a = @getimagesize($path);
	    $image_type = $a[2];
	     
	    if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG , IMAGETYPE_PNG , IMAGETYPE_BMP, IMAGETYPE_ICO)))
	    {
	        return true;
	    }
	    return false;
	}
	
?>