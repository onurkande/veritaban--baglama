<?php 
include "pdo-connect.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1><a href="index.php">giriş</a></h1>
   <table>
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
      </tr>
    </thead>

    <tbody>
  <?php 
  $sorgu= $conn->query("SELECT * FROM crud4");
  $veriler= $sorgu->fetchAll(PDO::FETCH_ASSOC);
  foreach($veriler as $satir){
    $id=$satir['id'];
    $name=$satir['name'];
    $email=$satir['email'];
    echo'  <tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
   </tr>';
  }
  ?>
    </tbody>
   </table>
</body>
</html>