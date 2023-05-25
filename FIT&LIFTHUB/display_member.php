<?php
  include "database.php";
  if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $sql_payment = "DELETE FROM payment WHERE MID='$deleteid'";
    if ($db->query($sql_payment) === TRUE) {
      $sql_member = "DELETE FROM member WHERE MID='$deleteid'";
      if ($db->query($sql_member) === TRUE) {
        header("Location: display_member.php");
        exit();
      } else {
        echo "Error deleting record: " . $db->error;
      }
    } else {
      echo "Error deleting record: " . $db->error;
    }
  }
  $sql = "SELECT * FROM member";
  $result = $db->query($sql);
  $db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIT & LIFT HUB/-MEMBERS LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h2 {
  text-align: center;
  margin-top: 30px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #4CAF50;
  color: white;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
a {
  color: blue;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}
.footer p {
  margin: 0;
}
nav {
  background-color: #333;
  overflow: hidden;
}
nav a.title {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}
nav a.title:hover {
  background-color: #ddd;
  color: black;
}
  </style>
</head>
<body>
<nav>
        <a class="title" href="#">FIT & LIFT HUB</a>
    </nav>
  <div class="panel">
<div class="container">
  <h2>MEMBERS LIST</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>Mobile</th>
        <th>PASSWORD</th>
        <th>ADDRESS</th>
        <th>AGE</th>
        <th>SUBSCRIPTION</th>
        <th>OPERATIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["MID"] . "</td>";
          echo "<td>" . $row["MNAME"] . "</td>";
          echo "<td>" . $row["MEMAIL"] . "</td>";
          echo "<td>" . $row["MMOB"] . "</td>";
          echo "<td>" . $row["MPASS"] . "</td>";
          echo "<td>" . $row["MADD"] . "</td>";
          echo "<td>" . $row["MAGE"] . "</td>";
          echo "<td>" . $row["MSUB"] . "</td>";
          echo "<td>";
          echo "<a href='update_member.php?updateid=" . $row["MID"] . "'>Update</a> | ";
          echo "<a href='delete_member.php?deleteid=" . $row["MID"] . "' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>";
          echo "</td>";
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      ?>
    </tbody>
  </table>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>