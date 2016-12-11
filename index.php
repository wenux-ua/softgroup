
 <style type="text/css">
body {
	background:#5685BF; 
	}
		
H1 { 
	display: block;
	font-size:40px;
	width:50%;
	background: linear-gradient(to top, #5685BF, #143963);
	color:#fff;
	padding: 10px;
	margin: 20px auto;
	border: 1px solid #5685BF;
	text-align: center;	
	}
   
article {
	font-size:25px;
	}
   
content {
	display:block;
	width: 75%;
	margin: 1px auto;
	text-align: center;
	padding:2px;   
	}
  </style>
<?php
	include ("dbconnect.php");
	include ("header.php");
?>

<!-- блок відображення записів-->
	
<?php
	$c=0;
	$r=mysql_query ("SELECT * FROM blog ORDER BY dt DESC"); // вибір усіх записів  БД, відсортованих так, що остання додана виводиться першою.
	while ($row=mysql_fetch_array($r))  // виведення для кожного запису.
	{
		if ($c%2)
			$col="bgcolor='#c0d5ed'";	// колір для парних записів
		else
			$col="bgcolor='#adc3dd'";	// колір для непарних
			
			?>
			<content>
			<table border="0" cellspacing="3" cellpadding="0" "  <? echo $col; ?> style="margin: 10px 0px;font-size: 18px; padding:4px;">
			<tr>
				<td width="100px" >Користувач:</td>
				<td><?php echo $row['username']; ?></td>
			</tr>
			
			<tr>
				<td width="150">Дата:</td>
				<td><?php echo $row['dt']; ?></td>
			</tr>
			
			<tr>
				<td colspan="2" style="color: #999999;">---------------------</td>
			</tr>

			<tr>
				<td colspan="2">
					<article><strong>Назва статті:</strong>&nbsp; <strong> <?php echo $row['subject']; ?> </strong></article>
					<br>
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					<strong>Текст:</strong>&nbsp; <?php echo $row['msg']; ?>
					<br>
				</td>
			</tr>
			</table></content>
			
			<?php
		$c++;
	}
	
	if ($c==0) // коли нічого немає
		echo 'Ще нічого немає :( <br>';
?>

<script type="text/javascript">
$(document).ready(function(){
 $.fn.animate_Text = function() {
  var string = this.text();
  return this.each(function(){
   var $this = $(this);
   $this.html(string.replace(/./g, '<span class="new">$&</span>'));
   $this.find('span.new').each(function(i, el){
    setTimeout(function(){ $(el).addClass('div_opacity'); }, 40 * i);
   });
  });
 };
 $('#example').show();
 $('#example').animate_Text();
});
</script>



