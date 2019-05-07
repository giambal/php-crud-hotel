<?php

$servername = "localhost";
$username = "root";
$password = "geforce2";
$dbname = "prova";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno) {
  echo $conn->connect_error;
  return;
}

$sql="
      SELECT price , status
      FROM pagamenti
      WHERE status LIKE 'pending'
      ORDER BY price DESC
";

$result = $conn->query($sql);

$res=[];

if ($result->num_rows > 0) {
  //output data of each row
  while($row = $result->fetch_assoc()) {
    $res[]=$row;
  }
}


  $conn->close();
  echo json_encode($res);


 ?>
