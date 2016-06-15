<?php
				echo "<meta charset='UTF-8' />";
				session_start();

				include('contain.php');
				
				//刪除被選擇項目
				if($_GET['po_id']!=NULL){
					$del=$_GET['po_id'];
					echo $del;
					$b="DELETE FROM po WHERE po_id=$del";
					mysqli_query($s,$b);
					echo "<p style='font-size:15px'>好食貼文編號 ".$del." 刪除成功</p>";
				
				echo "刪除成功<br>";
			echo "兩秒後跳轉<br>";
			header("Refresh:2;URL=nookpost.php");
		}else{
			echo "刪除失敗";
			echo "兩秒後跳轉<br>";
			header("Refresh:2;URL=nookpost.php");
		}
?>