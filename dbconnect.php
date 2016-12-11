<?php
	// название  сервера БД
	define ("HOST", "localhost");
	// название базы данных
	define ("DATABASE", "soft");
	// пользователь MySQL
	define ("MYSQL_USER", "soft");
	// пароль к MYSQL
	define ("MYSQL_PASS", "soft");
	
	
	// создаем базу данных и таблицу  blog
	$link1=mysql_connect(HOST, MYSQL_USER, MYSQL_PASS) or die("Нет соединения с MySQL сервером!");
	mysql_query ("CREATE DATABASE IF NOT EXISTS ".DATABASE) or die ("Не могу создать базу данных blog.");
	mysql_select_db(DATABASE) or die("Нет содениения с требуемой базой данных!");
	mysql_query ("CREATE TABLE IF NOT EXISTS blog (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR (100), dt DATETIME, subject TEXT, msg TEXT)") or die ("Не могу создать таблицу blog.");
?>