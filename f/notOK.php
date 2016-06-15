<?php
		include("contain.php");
		echo "<meta charset='UTF-8' />";
		if($_GET['po_id']!=NULL){
			$po_id=$_GET['po_id'];
			$name=$_GET['name'];
			$sure_com=$_GET['sure_com'];
			$name_id=$_COOKIE["id"];
			$connet=mysqli_query($s,"INSERT INTO notOK(po_id,po_name,po_title,name_id)  
										VALUES ('$po_id','$name','$sure_com','$name_id')");
			if($connet==TRUE)
				echo "成功檢舉編號 ".$po_id." 的好食貼文</br>";
				echo "<a href='keizi.php?po_id=$po_id'>按我回前一頁唷</a>";
		}else{
			echo "檢舉失敗，請檢察連線<br/>";
			echo "<a href='keizi.php?po_id=$po_id'>按我回前一頁唷</a>";
		}
?>