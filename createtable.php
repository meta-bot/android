<?php
	$dbUSER = 'admin';
	$dbPASS = 'admin';
	$dbHOST = '172.30.61.155';
	$dbPORT = 3306;
	$dbDB   ='sampledb';
	
	$conn = new mysqli($dbHOST , $dbUSER , $dbPASS , $dbDB , $dbPORT);
	if($conn->connect_error){
		die('Could not Connect: '.$conn->connect_error);
	}
	else{
		echo 'SUCCESS';
	}
?>