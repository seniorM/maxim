
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Галлерея</title>
	<link href="css/newcss.css" rel="stylesheet" type="text/css"/>
        <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<script type="text/javascript" src="js/popup_img.js"></script>
    </head>
    <body>
	<h1>Галлерея</h1>
        
	<form method="post" enctype="multipart/form-data" action="">	    
	              <p><a href="index.php">Главная</a></p>  
	
        <div id="gallery"><p><?php 
$dir ='./photos/'; // сохраняю в переменную путь к нашей папке
$photos=scandir($dir); //если все ок, то получаю список файлов из каталога.
    for($i=2; $i < count($photos);$i++){ 
        $photo=$dir.$photos[$i]; // получаю в переменную путь к файлу
        echo '<img src="'.$photo.'"class="image" >'; // вывожу картинку
	}
?>
            </p></div></form>
        
    </body>
</html>
