<?php 
require 'auth.php';


is_file('./index.php') || file_put_contents('./index.php', null);
empty($_POST['text']) || file_put_contents('./index.php', $_POST['text']);
$text = file_get_contents('./index.php');
?>
<!doctype html>
<html>
    <head>
        <link href="css/newcss.css" rel="stylesheet" type="text/css"/>
		<title>Редактирование главной страницы</title>
	</head>
		<body><h1>Редактирование главной страницы</h1>
                    <div id="user">Hello, <?=$_SESSION['admin']?>		    
                    </div>
		    <p><a href="index.php">Главная</a> | <a href="editGallery.php">Редактирование галлереи</a> | <a href="admin.php?do=logout">Выход</a></p>
<hr />
<form method="post">
    <textarea cols="250" rows="5" name="text"><?php echo htmlspecialchars($text); ?></textarea>
  <input type="submit" value="Сохранить">
</form>
		</body>
</html>

