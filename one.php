<?php
function saveComment() {
   $str ='<br>' . $_POST['name'] . '<br>' . $_POST['comment'] . '<br>' . date('Y-m-d H:i:s') . "\n\n" . '<br>' . '-----------------------------------------';
   file_put_contents('comment.txt', $str, FILE_APPEND);
}
if(!empty($_POST)) {
   saveComment();
   header("Location: {$_SERVER ['PHP_SELF' ]}");
   exit;
}
function getComment() {
   return file_get_contents('comment.txt');
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
 </head>
 <body>
    <form action="" method="post">
         Имя:<input type="text" name="name"><br><br>
        Текст:<br><textarea name="comment" id="" cols="25" rows="10" ></textarea><br><br>
        <input type="submit" value="Отправить"><br>
    </form>
    <?php
    echo getComment()
    ?>
 </body>
 </html>   
