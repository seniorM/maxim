<?php
$mylogin = 'admin';
$mypass = 'admin';
if(isset($_POST['btn_auth']))
{
if (($_POST['login'] == $mylogin) && ($_POST['password'] == $mypass))
{
echo 'Авторизация прошла успешно';
}
else
{
echo 'Неверные данные';
}
}
else
{
echo('
<form method="post">
Логин: <input type="text" name="login" />
Пароль: <input type="password" name="password" />
<input type="submit" value="Войти" name="btn_auth" />
</form>
');
}
