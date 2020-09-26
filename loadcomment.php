<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$port =3306;
$dbname = "rdxnotice";


// Create connection
$conn = new mysqli($servername, $username, $password);

$query = 'INSERT INTO rdxnotice.rdxcomments  (rdxcomments.content,rdxcomments.author,rdxcomments.idstory)
VALUES ("'.$_POST['comment'].'", "'.$_POST['author'].'", '.$_POST['post'].');';




 $conn -> query($query);




?>