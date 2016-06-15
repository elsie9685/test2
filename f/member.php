<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬美食討論區</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.wrap{
			width: 1200px;
			height: 1000px;
			margin-left: 50px;
		}
		.header{
			height: 30px;
		}
		.left{
			float: left;
			width: 250px;
			height: 900px;
			background: white;
			margin-top: 30px;
		}
		.right{
			float: left;
			width: 920px;
			height: 900px;
			margin-left: 30px;
		}
		.clear{
			clear: both;
		}

		a{
			height: 50px;
			font-size: 20px;
			font-family: 微軟正黑體;
		}
		a:link {text-decoration:none;}
		a:hover {color:#99DD00;}

		p{
			width: 920px;
			font-size: 20px;
			font-family: 微軟正黑體;
		}

		td{
			font-size: 20px;
			font-family: 微軟正黑體;
		}

table.TB_COLLAPSE {
  width:100%;
  border-collapse:collapse;
}
table.TB_COLLAPSE thead {
  padding:5px 0px;
  color:#fff;
  background-color:#915957;
}
table.TB_COLLAPSE tbody{
  padding:5px 0px;
  color:#555;
  text-align:center;
  background-color:#fff;
  border-bottom:1px solid #915957;
}

</style>
</head>
<body class="background2">
	<div class="wrap">
		<div class="header">
			<a href="index.php" style="float:right; margin-right:20px; margin-top:10px;">登出</a>
		</div>
		<div class="left">
			<br/><br/>
			<a href="member.php">會員管理</a><br/><br/>
			<a href="allpost.php">貼文管理</a><br/><br/>
			<a href="nookpost.php">檢舉文章</a><br/><br/>
		</div>
		<div class="right">
			<?php
				session_start();

				include('contain.php');
				
				if($_GET['del']!=NULL){
					$a=$_GET['del'];
					$b="DELETE FROM member WHERE no=$a";
					mysqli_query($s,$b);
					echo '你成功刪除:'.mysql_affected_rows();
				}else{
					echo "沒有傳入<br/>";
				}

				//DELETE FROM `hanlu`.`member` WHERE `member`.`no` = 120"

				$sql="SELECT * from member";
				$result=mysqli_query($s,$sql);
				
				echo '<p>總共有'.mysqli_num_rows($result).'個成員唷<br/></p>';
	
				echo "<table class='TB_COLLAPSE' border=2 align=center cellpadding=5>";
				echo "<thead><tr>
					  <td>成員編號</td>
					  <td>成員帳號</td>
					  <td>成員密碼</td>
					  <td>成員名字</td>
					  <td>成員電話</td>
					  <td>成員住址</td>
					  <td>刪除</td></tr></thead>";

				if($result==FALSE){
					echo "資料庫讀取失敗";
				}else{
						while($rows=mysqli_fetch_array($result)){
							echo "<tbody><tr>
								  <td>$rows[0]</td>
								  <td>$rows[1]</td>
								  <td>$rows[2]</td>
								  <td>$rows[3]</td>
								  <td>$rows[4]</td>
								  <td>$rows[5]</td>
								  <td><a href='member.php?del=<? echo $row[0]; php?>'>刪除</a></td></tr></tbody>";
						}echo "</table>";
			 	}

					
				?>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>

