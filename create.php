<?php
include "connection.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $q = "INSERT INTO People2(`Name`, `Phone`, `Address`) VALUES('$name', '$phone', '$address')";
  $query = mysqli_query($conn, $q);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-size: 10px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    nav {
      width: 100%;
      padding: 20px 5%;
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav h2 {
      font-size: 3rem;
    }

    nav ul a {
      text-decoration: none;
      background-color: teal;
      color: #fff;
      border-radius: 15px;
      padding: 12px 20px;
      font-size: 2rem;
    }

    nav ul a:nth-of-type(1) {
      margin-right: 20px;
    }

    main {
      background-color: #784d2d;
      width: 100%;
      min-height: 450px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      width: 35%;
      padding: 30px 20px;
      border-radius: 15px;
      background-color: #fff;
    }

    form input {
      height: 50px;
      border: 1px solid black;
      outline: 0;
      width: 100%;
      margin-bottom: 20px;
      border-radius: 10px;
      font-size: 1.8rem;
      padding: 0 10px;
    }

    form h2 {
      font-size: 3rem;
      text-align: center;
      margin-bottom: 30px;
    }

    form button {
      width: 100%;
      height: 50px;
      text-align: center;
      background-color: #000;
      color: #fff;
      border-radius: 10px;
      font-size: 1.8rem;
      cursor: pointer;
    }



    @media screen and (max-width:900px) {
      form {
        width: 50%;
      }
    }

    @media screen and (max-width:700px) {
      form {
        width: 70%;
      }
    }

    @media screen and (max-width:450px) {
      form {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <nav>
    <h2>IVC</h2>
    <ul>
      <a href="http://localhost/ReachOut/index.php">Data</a>
      <a href="http://localhost/ReachOut/create.php">?</a>
    </ul>
  </nav>

  <main>
    <form method="post">
      <h2>Details Here!</h2>
      <input type="text" name="name" placeholder="Name">
      <input type="tel" name="phone" placeholder="Phone Number">
      <input type="text" name="address" placeholder="Address">
      <button type="submit" name="submit">Save</button>
    </form>
  </main>

</body>

</html>