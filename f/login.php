<?php

session_start();
$_SESSION['flag']='0';

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬的美食板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
    <style>
        input[name='button'] { 
            padding:5px 15px; 
            background:white; 
            border:1 none;
            border-style: double;
            cursor:pointer;
            border-radius: 5px; 
            font-family:微軟正黑體;
            font-size: 18px;
            width:80px; 
            height:40px;
        }
    </style>
	
</head>
<body class="background">
	<div>
	<img src="pic.png" title="憨廬愛美食" width="723" height="170" style="display:block; margin:auto">
	</div>

<!登入>
<form name="form1" method="post" action="verify.php">
    <div style="font-size:35px;font-family:微軟正黑體;text-shadow:0px 0px 15px #00FFCC;font-weight: bold">會員登入</div>
    <br/>
    <br/>
    <div class="container" style="font-family:微軟正黑體;font-size: 25px">
        帳號：<input type="text" name="id" placeholder="請輸入帳號" maxlength="20" size="20" style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;  font-family:微軟正黑體"><br><br>
        密碼：<input type="password" name="password" placeholder="請輸入密碼" maxlength="20" size="20" style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none; font-family:微軟正黑體;"><br><br><br>

        <input type="submit" name="button" value="登入">&nbsp;
        <input type="reset" name="button" value="清除">&nbsp;&nbsp;
    </div>
</form>

<!古錐小圖片：回到首頁or我要註冊>
<link href="indexm.css" rel="stylesheet" type="text/css">
<div class="footer">
    <img src="lu.png" width="70" height="70"></img>
</div>
<div class="footer4">
    <a href="index.php"><img src="index.png" width="80" height="70"></img></a>
</div>
<div class="footer3">
    <a href="register.php"><img src="register.png" width="80" height="70"></img></a>
</div>
<div class="footer2">
    <img src="han.png" width="70" height="70"></img>
</div>

</body>
</html>