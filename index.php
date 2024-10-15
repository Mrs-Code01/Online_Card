<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
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

    section {
      max-width: 80%;
      background-color: rgb(243, 243, 243);
      border-radius: 20px;
      height: 400px;
      margin: 70px auto 0;
      overflow: auto;
      box-shadow: 0px 0px 5px 4px rgba(0, 0, 0, .1);
    }

    .heading h2 {
      text-align: center;
      padding: 20px;
      background-color: rgb(0, 0, 0);
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      font-size: 2.4rem;
      color: #fff;
    }

    .heading span {
      font-size: 2.4rem;
    }

    .table_container {
      width: 95%;
      overflow: auto;
      margin: 30px auto;
      border-radius: 13px;
    }

    .table_container::-webkit-scrollbar {
      width: .8rem;
      height: .8rem;
    }

    .table_container::-webkit-scrollbar-thumb {
      border-radius: 10px;
      visibility: hidden;
      background-color: rgb(83, 83, 83);

    }

    .table_container:hover::-webkit-scrollbar-thumb {
      border-radius: 10px;
      visibility: visible;
      background-color: rgb(83, 83, 83);
    }

    table {
      width: 1150px;
      border-collapse: collapse;
    }

    thead {
      background-color: #784d2d;
    }

    thead tr th {
      font-size: 1.8rem;
      text-align: left;
      color: #fff;
    }

    tbody tr td {
      font-size: 1.8rem;
      text-align: left;
    }

    tbody tr:nth-child(odd) {
      background-color: rgb(241, 235, 235);
    }

    tbody tr:nth-child(even) {
      background-color: rgb(255, 255, 255);
    }

    table,
    th,
    td {
      padding: 15px 0;
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

  <section>
    <div class="heading">
      <h2>Invites</h2>
    </div>
    <div class="table_container">
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "connection.php";
          $sql = "select * from People2";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo "
          <tr>
            <td>$row[Id]</td>
            <td>$row[Name]</td>
            <td>$row[Phone]</td>
            <td>$row[Address]</td>
            <td>$row[Join_date]</td>
          </tr>
          ";
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>