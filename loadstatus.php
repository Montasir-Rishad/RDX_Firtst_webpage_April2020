<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$port =3306;
$dbname = "rdxnotice";



// Create connection
$conn = new mysqli($servername, $username, $password);

$query = 'INSERT INTO rdxnotice.rdxnotice (rdxnotice.content,rdxnotice.author) values ("'.$_POST["rdxtext"].'","'.$_POST["author"].'")';

 $conn -> query($query);

 $query = 'SELECT rdxnotice.id from rdxnotice.rdxnotice order by rdxnotice.id desc limit 1';
    


 $result = $conn -> query($query);


$row = $result -> fetch_row();



 echo($row[0]);

?>