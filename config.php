<?php

	$URL='http://localhost/vulcano/vulcano_postal_natal_2014/site/index.php';
	$URL_IMAGE_DEFAULT='http://localhost/vulcano/vulcano_postal_natal_2014/site/img/screens/share.png';
	$URL_SITE_POSTAL='http://localhost/vulcano/vulcano_postal_natal_2014/site/postal.php?id=';
	$URL_SITE_POSTAL_IMAGE='http://localhost/vulcano/vulcano_postal_natal_2014/site/upload/backup/';
	

	$mysql_server='192.168.1.122';
	$mysql_database='natal_vulcano_2014';
	$mysql_user='root';
	$mysql_password='';

	$link = mysql_connect($mysql_server, $mysql_user, $mysql_password) or die('Could not connect: ' . mysql_error());  
	mysql_select_db($mysql_database) or die('Could not select database');

?>	
