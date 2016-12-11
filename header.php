 <html>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$("body").css("display", "none");
		$("body").fadeIn(1000);
		});
	</script>
 
<head><title>Блог</title></head>
<style>
header {
	display: block;
	font-size:22px;
	background: linear-gradient(to top, #143963, #5685BF);
	color:#fff;
	link:#fff;
	padding: 10px;
    border: 1px solid #5685BF;
	text-align: center;
	}
 
A {
	color: #cecece; /* Цвет ссылок */
   }
A:visited {
    color: #cecece; /* Цвет посещенных ссылок */
   }
A:active {
    color: #ffff00; /* Цвет активных ссылок */
   }
</style>

<header>
<?php
	$add_article='<a href="add.php">Добавити статтю</a>';
	$about_me='<a href="about.php">Про мене</a>';
		
		echo '<h1>Блог</h1>';
	
	//навігаціця
	$main_nav = array(
		"index.php" => "&#8226; Блог",
		"add.php" => "&#8226; Добавити статтю",
		"about.php" => "&#8226; Про мене"
	);
	
		foreach ($main_nav as $key => $value) {
			echo "<a href='$key'>$value</a> " ;
	
		}
?>
</header>