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
session_start();
if($_SESSION['flag']='1'){
	echo '歡迎你登入 ROOT, ';
	echo "<a href=1.php>登出</a>";
}else{
	echo'你不是ROOT';
	echo "<a href=1.php>回到登入畫面</a>";
	die();
}
include('db.php');
if($_GET['del']){
	$a=$_GET['del'];
	$s="delete from member where no=$a";
	mysql_query($s);
	echo '你成功刪除:'.mysql_affected_rows();
}

$sql="SELECT * from member";
$result=mysql_query($sql);
echo '<br>總共有'.mysql_num_rows($result).'成員';
if(!$_GET['order']){
	echo "<table width=100% border=2 align=center cellpadding=0 cellspacing=0>";
	echo "<tr bgcolor=#0033FF>
		  <td>成員編號</td>
		  <td>成員帳號</td>
		  <td>成員密碼</td>
		  <td>成員名字</td>
		  <td>成員電話</td>
		  <td>成員住址</td>
		  <td>刪除</td></tr>";
}

while($rows=mysql_fetch_array($result)){
	echo "<tr bgcolor=#66FF66>
		  <td>$row[0]</td>
		  <td>$row[1]</td>
		  <td>$row[2]</td>
		  <td>$row[3]</td>
		  <td>$row[4]</td>
		  <td>$row[5]</td>
		  <td><a href=5.php?del=$row[0]>刪除</a></td></tr>";
}

echo "</table>";
?>
</body>
</html>