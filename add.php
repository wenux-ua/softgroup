<style type="text/css">
body {
	background:#5685BF; 
	color:#fff;
	font-size:22px;
	text-align:center;
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
 	
table, th, td {
	font-size:22px;
	color:#fff;
	}

input {
    height: 35px;
    padding: 5px 10px 5px 10px;
    border:1px solid #999;
    font-size:16px;
    font-family: Tahoma;
}

input[type=submit] {
    width: 100%;
	height:50px;
    background-color: #112D4D;
    color: white;
	font-size:22px;
    padding: 0px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #335C8E;
	}
  </style>
<?php
include ("header.php");
?>
<p>
<!-- перевірка форми -->
<script>
function splash()
{
	if (document.myForm.username.value  =='')
		{
			alert ("Заповніть ім\"я!");
			return false;	
		}
		
		if (document.myForm.subject.value  =='')
		{
			alert ("Заповніть назву!");
			return false;	
		}
		
	if (document.myForm.msg.value  =='')
		{
			alert ("Заповніть текст!");
			return false;	
		}
	return true;   
}
</script>
<div class="form">
<!-- код форми -->
<form name="myForm" action="action.php" method="post" onSubmit="return splash();">
 <div class="form">

<input type="hidden" name="action" value="add">
<table align="center" border="0">

	<tr>
		<td width="160">
			Автор:
		</td>
		<td>
			<input name="username" style="width: 300px;">
		</td>
	</tr> </li>
	
	<tr>
		<td width="160">
			Назва статті:
		</td>
		<td>
			<input name="subject" style="width: 300px;">
		</td>
	</tr>
	
	
	<tr>
		<td>
			Текст:
		</td>
		<td>
			<textarea name="msg" style="width: 300px; height:100px;font-size:20px;"></textarea>
		</td>
	</tr>		
	<tr>
		<td width="160" height="50px">
			&nbsp;
		</td>
		<td>
			<input type="submit" value="Написати статтю!">
		</td>
	</tr>
</table>
</div>
</form>
</div>
</body>
</html>

<?php
$info = <<<INFO
	*Також можна використовувати HTML-теги.</br>
	<strong>Наприклад:</strong> &lt;strong&gt; , &lt;a&gt; , &lt;i&gt; , &lt;ul&gt; , &lt;/br&gt; ,  &lt;/p&gt;.
INFO;
	echo "$info";		
?>
