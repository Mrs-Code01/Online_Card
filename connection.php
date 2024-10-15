<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "Invites2";

  try {
    $conn = mysqli_connect(
      $servername,
      $username,
      $password,
      $db_name,
      3306
    );
  } catch (mysqli_sql_exception) {
    echo "Could not connect";
  }
  ?>

</body>

</html>