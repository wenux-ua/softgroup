<?php
	// хост
	define ("HOST", "localhost");
	// назва бд
	define ("DATABASE", "soft");
	// юзер MySQL
	define ("MYSQL_USER", "soft");
	// пароль  MYSQL
	define ("MYSQL_PASS", "soft");
	
	
	// створюєм базу і таблицю  blog
	$link1=mysql_connect(HOST, MYSQL_USER, MYSQL_PASS) or die("Немає зєднання з MySQL сервером!");
	mysql_query ("CREATE DATABASE IF NOT EXISTS ".DATABASE) or die ("Не можу створити базу даних blog.");
	mysql_select_db(DATABASE) or die("НЕмає зєднання з базою!");
	mysql_query ("CREATE TABLE IF NOT EXISTS blog (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR (100), dt DATETIME, subject TEXT, msg TEXT)") or die ("Не можу створити таблицю blog.");
?>