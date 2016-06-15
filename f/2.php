<html>
	<head>
		<meta charset="utf-8">
		<title>憨廬的美食板</title>
		<link href="indexm.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<body class="background2">
	</body>
</html>

<?php

include('contain.php');
$sql="select * from member where id= '$_GET[id]' and password= '$_GET[password]'";
$result=mysql_query($sql);

if(!$row=mysql_fetch_array($result)){
	echo "<div style='font-size:40px; font-family:華康秀風體W3; margin-top:180px; font-weight:bold'>
		<p>登入失敗</p>
	</div>";
	echo "<div style='font-size:40px; line-height:100px;font-family:華康秀風體W3; font-weight:bold'>
		<p>帳號或密碼可能錯囉</p>
	</div>";
	echo "<div style='font-size:30px;font-family:華康秀風體W3;font-weight:bold'><a href=login.php>回到登入畫面</a></div>";
	die();
}else{
	echo "<script>document.location.href='po1.php';</script>";
}

if($_GET[id]=='root'){
	header('location:po1.php');
}
?>

