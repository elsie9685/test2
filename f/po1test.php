<?php
$dir="upload1/";
$i=count($_FILES["upload"]["name"]);
for($j=0;$j<$i;$j++){
	$tmpname=$_FILES["upload"]["tmp_name"][$j];
	$filename=$_FILES["upload"]["name"][$j];
	$now=new DateTime("now",new DateTimeZone("Asia/Taipei"));
	$nowtime=$now->format("YmdHis");
	$extension=pathinfo($filename, PATHINFO_EXTENSION);
	move_uploaded_file($tmpname, $dir.$nowtime.$j.".".$extension);
	$ree=$dir.$nowtime.$j.".".$extension;
	

}
?>