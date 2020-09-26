<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$port =3306;
$dbname = "rdxnotice";

$data = array();

// Create connection
$conn = new mysqli($servername, $username, $password);

$query = 'SELECT * FROM rdxnotice.rdxnotice ORDER BY date DESC limit 4';

 $result =$conn -> query($query);

 while ($row = $result -> fetch_row())
  {
    array_push($data,$row);
  }

  $datas = json_encode($data);
echo($datas);

?>