<?php
session_start();
if($_SESSION['admin']){
    header("Location: admin.php");
    exit;
}
$login= 'admin';
$pass = 'admin';
if ($_POST['submit']){
    if($login == $_POST['user']&& $pass == $_POST['pass']){
        $_SESSION['admin'] = $login;
        header("Location:admin.php");
        exit;
    }else{
        echo '<p>Логин или пароль введены неверно!</p>';
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/newcss.css" rel="stylesheet" type="text/css"/>
        <title>Страница авторизации</title>
    </head>
    <body>
        <h1>Авторизация</h1>
        <form method="post" id="auth">
		    <label>Логин:
			<input type="text" name="user" />
		    </label>
                    <label>Пароль:
                        <input type="password" name="pass" />
		    </label>
		    <input type="submit" name="submit" value="Войти на сайт"/>
		</form>
    </body>
</html>
