<?php
	include ("dbconnect.php");

	// отримання змінних з форми
	$username=$_REQUEST['username'];
	$subject=$_REQUEST['subject'];
	$msg=$_REQUEST['msg'];
	$action=$_REQUEST['action'];
	
	if ($action=="add")
	{
		// добавити дані в бд
		$sql="INSERT INTO blog(username, dt, subject, msg) VALUES ('$username', NOW(), '$subject', '$msg')";
		$r=mysql_query ($sql);
	}
	
	if ($action=="delete")
	{
		// видалення БД
		$sql="DELETE FROM blog";
		$r=mysql_query($sql);
	}
	
	header("Location: index.php");
?>