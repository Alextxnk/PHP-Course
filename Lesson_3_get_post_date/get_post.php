<?php
// на большистве сайтов есть те или иные пользовательские формы, get и post - это методы, которые передают введеную пользователем информацию на веб-сервер для ее дальнейшей отработки 
/* echo "<pre>";
var_dump($_GET);
echo "</pre>"; */

// GET применяется только в том случае, когда данные не должны быть засекречены (этот запрос можно увидеть)
// метод POST в отличие от GET использует для передачи информации не адресную строку, а HTTP заголовки поэтому запрос увидеть нельзя 
// с помощью метода POST можно отправлять картинки или файлы на сервер 

// если существует GET с ключем text, то выполняется условие
/* if (isset($_GET['text'])) { 
   echo 'Привет';
   die(); // прекращаем выполнение 
} */
?>

<!-- прописываем method="post" т.к. по умолчанию отправляется get'ом
action="content.php" делает переадресацию на другую страницу -->
<!-- <form action="Lesson_3_get_post_date/content.php" method="post"> 
   <input type="text" name="username">
   <input type="submit">
</form> -->

<!-- глобальная переменная REQUEST может содержать в себе контент и GET запроса и POST запроса и Cookies 
Ассоциативный массив - array, который по умолчанию содержит данные переменных $_GET, $_POST и $_COOKIE. -->

<form action="" method="post"> 
   <input type="text" name="username">
   <input type="submit">
</form>

<?php 
echo "<pre>";
var_dump($_REQUEST); // в этом глобальном массиве могут быть ключи от GET и POST запросов
echo "</pre>";