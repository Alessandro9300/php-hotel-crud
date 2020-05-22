<?php


  header('Content-Type: application/json');

  $server = "localhost";
  $username = "root";
  $password = "root";
  $dbName = "sql_classe";

  $conn = new mysqli($server, $username, $password, $dbName);

  if ($conn -> connect_errno) {

    echo $conn -> connect_errno;
    return;

  }

  $sql = "

    SELECT name, lastname, price, status
      FROM pagamenti
        RIGHT JOIN paganti
          ON paganti.id = pagamenti.pagante_id

  ";

  $results = $conn -> query($sql);

  if ($results -> num_rows < 1){

    echo "no result";
    return;
  }

  $res = [];

  while ($row = $results -> fetch_assoc()) {

    $res[] =  $row;

  }

  $conn -> close();

  echo json_encode($res);

 ?>
