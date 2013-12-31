/**
 * @author NRX
 */

function url_check(data)
		  {
		  	//return alert ('zvsdg');
		  	if(data == 1)
		  	{
		  		$('.cls_browse').removeAttr('disabled');
		  		$('.cls_web').attr('disabled','disabled');
		  		$('.cls_web').val('');
		  	}
		  	else
		  	{
		  		$('.cls_web').removeAttr('disabled');
		  		$('.cls_browse').attr('disabled','disabled');
		  		$('.cls_browse').val('');
		  	}
		  }
		  
function focus_radio(data)
{
	if(data == 1)
		  	{
		  		//$('.upload_browse').attr('checked','checked');
		  		$('.upload_browse').click();
		  		
		  	}
		  	else
		  	{
		  		//$('.upload_web').attr('checked','checked');
		  		$('.upload_web').click();
		  		
		  	}
}

function validate_upload()
{
	var url = $('.cls_web').val();
	var browse = $('.cls_browse').val();
	//return alert(url + ' ' + browse); 
	//document.write('<?php exit; ?>');
	// Bila Url Kosong require_once ('lib/ih_upload_images.php');	
	if(url == "")
	{
		// Bila Browse tidak kosong
		if(browse != "")
		{
			
		}
		// Bila Browse kosong
		else
		{
			return alert('Please input your link images!');
		}
	}
	// Bila Url tidak kosong
	else
	{
		// Bila Browse kosong
		if(browse == "")
		{
			
		}
		
	}
}
