<?php

// Configure Website
$con['hostname'] = "localhost";
$con['username'] = "root";
$con['password'] = "";
$con['database'] = "db_ih_web";

// Configure define URL
define("BASE_URL","http://localhost/image_hosting/");
define("BASE_CSS",BASE_URL."css");
define("BASE_JS",BASE_URL."js");
define("BASE_IMAGES",BASE_URL."images");
define("BASE_LIB",BASE_URL."lib");

define("TEMP_ADMIN",BASE_URL."template/temp_ih_admin/");
define("TEMP_USER",BASE_URL."template/temp_users/");
define("TEMP_GUEST",BASE_URL."template/temp_guest/");

// Configure URL for include / require
define("INC_LIB","lib/");
define("INC_TEMP","template/");
define("INC_TEMP_ADMIN",INC_TEMP."temp_ih_admin/");
define("INC_TEMP_USER",INC_TEMP."temp_users/");
define("INC_TEMP_GUEST",INC_TEMP."temp_guest/");

// Configure URL Storage Upload Images
define('BASE_UPLOAD', BASE_URL.'storage_upload/');


// Connect to Server & Database
$conn = mysql_connect($con['hostname'],$con['username'],$con['password']) or die("<b>Problem Webserver :</b><br />".mysql_error());

	if($conn) 
	{
		$conn_db = mysql_select_db($con['database']) or die("<b>Problem Webserver :</b><br />".mysql_error());
	}
	
?>