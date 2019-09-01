<?php
require 'auth.php';
?>
<!doctype html>
<html>
    <head>
        <link href="css/newcss.css" rel="stylesheet" type="text/css"/>
		<title>Админ панель</title>
	</head>
		<body><h1>Админ панель</h1>
                    <div id="user">Hello, <?=$_SESSION['admin']?>		    
                    </div>
		    <p><a href="editGallery.php">Редактирование галлереи</a> | <a href="editeMain.php">Редактирование главной</a> | <a href="admin.php?do=logout">Выход</a></p>
<hr />

		</body>
</html>
