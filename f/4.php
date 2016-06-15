<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬美食討論區</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	
	</head>
<body class="background">
	<div>
	<img src="hanlu.png">
	</div>

<?php

include('db.php'); 

$sql="insert member (id,password,name,telephone,address,date)values('$_POST[id]','$_POST[password]','$_POST[name]','$_POST[telephone]','$_POST[address]',sysdate())";
$result=mysql_query($sql);
if(mysql_affected_rows()>=1)
echo "新增成功<br>";

?>
</body>
</html>